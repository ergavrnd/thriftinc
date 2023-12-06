<?php

namespace App\Http\Controllers;

use App\Models\Kategori_barang;
use Illuminate\Http\Request;

class HomeadminController extends Controller
{
    public function index(){
        return view('homeadmin', [
            "admin" => Kategori_barang::all()
        ]);
    }
    //
}
