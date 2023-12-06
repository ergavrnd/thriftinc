<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori_barang;
use App\Models\Barang;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class CategoryAdmController extends Controller
{
    public function index(){
        return view('admin.viewcategory', [
            "category"=>Kategori_barang::all(),
            "barang" => Barang::all(),
            "count" => 0
        ]);
    }

    public function delete(){
        $id=request('id');
        $oldImage=request('oldImage');
        if($oldImage){
            Storage::delete($oldImage);
        }
        Kategori_barang::destroy($id);
        return redirect('/categoryadm');
    }

    public function viewcreate(){
        return view('admin.createcategory', [
            "category"=>Kategori_barang::all()
        ]);
    }

    public function store(Request $request){
        $validatedData= $request->validate([
            'Nama_kategori' => 'required|max:255',
            "slug" => 'required|unique:kategori_barangs',
            'gambar' => 'image|file|max:10240'
        ]);

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('img-category');
        }

        Kategori_barang::create($validatedData);
        return redirect('/categoryadm');
    }

    public function viewupdate($slug){
        return view('Admin.updatecategory', [
            "category"=>Kategori_barang::where('slug', $slug)->get()
        ]);
    }

    public function update(Request $request){
        $slug=request('slugid');
        $rules = [
            'Nama_kategori' => 'required|max:255',
            'gambar' => 'image|file|max:10240'
        ];

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('img-category');
        }

        if($request->slug != $slug){
            $rules['slug'] = 'required|unique:kategori_barangs';
        }

        $validatedData = $request->validate($rules);

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('img-barang');
        }

        Kategori_barang::where('slug', $slug)->update($validatedData);
        return redirect('/categoryadm');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Kategori_barang::class, 'slug', $request->Nama_kategori);
        return response()->json(['slug' => $slug]);
    }
}
