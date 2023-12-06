<?php

namespace App\Http\Controllers;
use App\Models\Kategori_barang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home2', [
            "home" => Kategori_barang::all()
        ]);
    }
}
