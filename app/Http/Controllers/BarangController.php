<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori_barang;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang=Barang::all();
        return view('historycus',
        [ 'barang'=>$barang

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug)
    {
        return view('addcatalog', [
            "kategori"=>Kategori_barang::where('slug', $slug)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData= $request->validate([
            'Nama_barang' => 'required|max:255',
            "kategoriBarang_id" => 'required',
            "slug" => 'required|unique:barangs',
            'Jumlah_barang' => 'required',
            'Harga_barang' => 'required',
            'Foto_barang' => 'image|file|max:10240'
        ]);

        if($request->file('Foto_barang')){
            $validatedData['Foto_barang'] = $request->file('Foto_barang')->store('img-barang');
        }
        Barang::create($validatedData);
        return redirect()->back();
    }

    public function viewupdate($slug){
        return view('Admin.updatecart', [
            "barang"=>Barang::where('slug', $slug)->get(),
            "kategori"=>Kategori_barang::all()
        ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBarangRequest  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        $slug=request('slug');
        $category=request('slugcat');
        $rules = [
            'Nama_barang' => 'required|max:255',
            "kategoriBarang_id" => 'required',
            'Jumlah_barang' => 'required',
            'Harga_barang' => 'required',
            'Foto_barang' => 'image|file|max:10240'
        ];

        if($request->file('Foto_barang')){
            $validatedData['Foto_barang'] = $request->file('Foto_barang')->store('img-barang');
        }

        if($request->slug != $slug){
            $rules['slug'] = 'required|unique:barangs';
        }

        $validatedData = $request->validate($rules);

        if($request->file('Foto_barang')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['Foto_barang'] = $request->file('Foto_barang')->store('img-barang');
        }

        Barang::where('slug', $slug)->update($validatedData);
        return redirect('catalogadmin/'.$category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function delete(){
        $id=request('id');
        $oldImage=request('oldImage');
        if($oldImage){
            Storage::delete($oldImage);
        }
        Barang::destroy($id);
        return redirect()->back();
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Barang::class, 'slug', $request->Nama_barang);
        return response()->json(['slug' => $slug]);
    }
}
