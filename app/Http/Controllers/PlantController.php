<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Models\Saran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Google\Cloud\Storage\StorageClient;

class PlantController extends Controller
{
    // get elevation
    public function elevation(Request $request)
    {
        $validator = Validator::make($request->query(), [
            'long' => 'required',
            'lat' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Parameters "long" and "lat" are required.'], 400);
        }

        $lat = $request->query('lat');
        $long = $request->query('long');

        $iklim = '';

        $url = Http::get('https://api.open-elevation.com/api/v1/lookup?locations=' . $lat . ',' . $long);
        $elevation = $url['results'][0]['elevation'];

        $iklim = $this->classifyClimate($lat, $elevation);
        $saran = Saran::select('tanaman', 'iklim')->where('iklim', $iklim)->get();
        return response()->json(
            [
                'status' => 'success',
                'elevation' => $elevation,
                'latitude' => $lat,
                'longitude' => $long,
                'iklim' => $iklim,
                'data' => $saran


            ]
        );

        // $respon = Http::get('https://maps.googleapis.com/maps/api/elevation/json?locations=' . $long . '%2C' . $lat . '&key=AIzaSyBYoF_txzv3GXIYtPpZD9oTccVfrse0Whw');
        // $data = $respon['results'][0]['elevation'];

        // https://maps.googleapis.com/maps/api/elevation/json?locations=106.8456%2C-6.2088&key=AIzaSyBYoF_txzv3GXIYtPpZD9oTccVfrse0Whw 


        // $pembulatan = round($data);

        // if ($pembulatan <= 700) {
        //     $iklim = 'panas';
        // } elseif ($pembulatan > 700 && $pembulatan < 1500) {
        //     $iklim = 'sedang';
        // } elseif ($pembulatan > 1500 && $pembulatan < 2500) {
        //     $iklim = 'sejuk';
        // } elseif ($pembulatan > 2500) {
        //     $iklim = 'dingin';
        // }
        // $saran = Saran::select('foto', 'nama_tanaman', 'iklim')->where('iklim', $iklim)->get();
        // return response()->json(
        //     [
        //         'status' => 'success',
        //         'data' => $saran
        //     ]

        // );
    }


    public function classifyClimate($latitude, $elevation)
    {
        // Klasifikasi berdasarkan elevation
        if ($elevation > 2500) {
            return "dingin";
        } elseif ($elevation > 1500) {
            return "sejuk";
        } elseif ($elevation > 500) {
            return "sedang";
        } else {
            // Klasifikasi berdasarkan latitude jika elevasi rendah
            if (abs($latitude) < 23.5) {
                return "panas";
            } elseif (abs($latitude) < 40) {
                return "sedang";
            } else {
                return "sejuk";
            }
        }
    }


    // get specified by id 
    public function predict(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpg|max:4096',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ], 400);
        }
        $image = $request->file('image');
        $path = $image->store('images', 'gcs');
        $imageUrl = Storage::disk('gcs')->url($path);


        $filename = basename($imageUrl);
        $filenameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);

        $endpoint = 'http://34.128.101.63:81/predict?imageurl=' . $imageUrl . '&imagename=' . $filenameWithoutExtension;

        $response = Http::get($endpoint);

        $responseData = $response->body();


        $data = Plant::select('foto', 'nama_tanaman', 'deskripsi', 'cara_perawatan', 'referensi')->where('nama_tanaman', $responseData)->get();

        if ($response->successful()) {

            // $data = ['nama tanaman' => $responseData];
            return response()->json(
                [
                    'status' => true,
                    'nama_tanaman' => $responseData,
                    'data' => $data
                ]
            );
        } else {
            // $statusCode = $response->status();
            return false;
        }
    }
}
