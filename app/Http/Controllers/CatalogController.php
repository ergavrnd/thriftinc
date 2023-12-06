<?php

namespace App\Http\Controllers;
use App\Models\Kategori_barang;
use App\Models\Barang;
use App\Models\JasaKirim;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index($slug){
        $data=Kategori_barang::where('slug', $slug)->get();
        return view("catalog", [
            "catalog" => Kategori_barang::where('slug', $slug)->get(),
            "barang" => Barang::where('kategoriBarang_id', $data[0]->id)->paginate(8)
        ]);
    }
}
