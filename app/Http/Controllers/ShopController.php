<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::select('id', 'foto', 'nama_barang', 'harga', 'deskripsi', 'referensi')->get();
        return response()->json($shops);
    }

    public function show(Shop $shop)
    {
        return response()->json($shop);
    }
}
