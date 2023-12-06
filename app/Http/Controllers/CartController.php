<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Kategori_barang;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show($slug){
        return view('cart', [
            "barang" => Barang::where('slug', $slug)->get(),
            "catalog" =>Kategori_barang::all()
        ]);
    }
}
