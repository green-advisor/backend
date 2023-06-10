<?php

namespace App\Http\Controllers;

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


        return response($data);
    }

}
