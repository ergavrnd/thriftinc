<?php

namespace App\Http\Controllers;
use App\Models\Kategori_barang;
use Illuminate\Http\Request;

class Home2Controller extends Controller
{
    public function index (){
        return view('home', [
            "home" => Kategori_barang::all()
        ]);
    }
}
