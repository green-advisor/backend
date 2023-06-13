<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    // get all
    public function index()
    {
        $shops = Shop::select('id', 'foto', 'nama_barang', 'harga', 'deskripsi', 'referensi')->get();

        return response()->json([
            'status' => 'success',
            'data' => $shops
        ]);
    }

    // get specified by id
    public function show(Shop $shop)
    {
        return response()->json([
            'status' => 'success',
            'data' => $shop
        ]);
    }
}
