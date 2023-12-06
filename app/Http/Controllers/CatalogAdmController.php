<?php

namespace App\Http\Controllers;
use App\Models\Kategori_barang;
use App\Models\Barang;
use App\Models\JasaKirim;
use Illuminate\Http\Request;

class CatalogAdmController extends Controller
{
    public function index($slug){
        $data=Kategori_barang::where('slug', $slug)->get();
        return view('catalogadm', [
            "catadm" => Kategori_barang::where('slug', $slug)->get(),
            "barang" => Barang::where('kategoriBarang_id', $data[0]->id)->paginate(8)
        ]);
    }

    public function viewupdate($slug){
        return view('Admin.updatecatalog', [
            "jasa"=>JasaKirim::where('slug', $slug)->get()
        ]);
    }
}
