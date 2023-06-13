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
            // Tangani jika validasi gagal
            return response()->json(['error' => 'Parameters "long" and "lat" are required.'], 400);
        }

        $long = $request->query('long');
        $lat = $request->query('lat');

        $respon = Http::get('https://maps.googleapis.com/maps/api/elevation/json?locations=' . $long . '%2C' . $lat . '&key=AIzaSyBYoF_txzv3GXIYtPpZD9oTccVfrse0Whw');
        $data = $respon['results'][0]['elevation'];

        $pembulatan = round($data);

        $iklim = '';
        if ($pembulatan <= 700) {
            $iklim = 'panas';
        } elseif ($pembulatan > 700 && $pembulatan < 1500) {
            $iklim = 'sedang';
        } elseif ($pembulatan > 1500 && $pembulatan < 2500) {
            $iklim = 'sejuk';
        } elseif ($pembulatan > 2500) {
            $iklim = 'dingin';
        }
        $saran = Saran::select('nama_tanaman', 'iklim')->where('iklim', $iklim)->get();
        return response()->json(
            [
                'status' => 'success',
                'data' => $saran
            ]

        );
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


        $data = Plant::select('foto', 'nama_tanaman', 'deskripsi', 'cara_perawatan', 'referensi')->where('nama_tanaman', $responseData) ->get();

        if ($response->successful()) {

            // $data = ['nama tanaman' => $responseData];
            return response()->json(
                [
                    'status' => 'success',
                    'nama_tanaman' => $responseData,
                    'data' => $data
                ]
            );
        } else {
            $statusCode = $response->status();
            return $statusCode;
        }
    }
}
