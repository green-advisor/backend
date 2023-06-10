<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Models\Saran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlantController extends Controller
{
    // get elevation 
    public function elevation(Request $request)
    {
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
        return response()->json($saran);
    }

    // get specified by id 
    public function predict(Plant $plant)
    {
        return response()->json($plant);
    }
}
