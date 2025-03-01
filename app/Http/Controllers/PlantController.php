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

       
    }


    private function classifyClimate($latitude, $elevation)
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
       
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename); // Simpan di /public/images/

            $path = public_path("images/$filename");
        }

        $url_ml = 'http://host.docker.internal:5001/predict';


        $response = Http::attach(
            'file',
            file_get_contents($path),
            basename($path)
        )->post($url_ml);

        $data = Plant::select( 'nama_tanaman', 'deskripsi', 'cara_perawatan', 'referensi')->where('nama_tanaman', $response['prediction'])->get();

        return response()->json(
            [
                'status' => true,
                'nama_tanaman' => $response['prediction'],
                'data' => $data
            ]
        );

       
    }
}
