<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JasaKirim;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class JasaKirimAdmController extends Controller
{
    public function index(){
        return view('admin.jaskir', [
            "jasa"=>JasaKirim::all()
        ]);
    }

    public function store(Request $request){
        $validatedData= $request->validate([
            'Nama_jasa' => 'required|max:255',
            "slug" => 'required|unique:jasa_kirims',
            'harga' => 'required'
        ]);
        JasaKirim::create($validatedData);
        return redirect('/jasakirim');
    }

    public function viewcreate(){
        return view('admin.createjaskir', [
            "jasa"=>JasaKirim::all()
        ]);
    }

    public function delete(){
        $id=request('id');
        JasaKirim::destroy($id);
        return redirect('/jasakirim');
    }

    public function viewupdate($slug){
        return view('Admin.updatejaskir', [
            "jasa"=>JasaKirim::where('slug', $slug)->get()
        ]);
    }

    public function update(Request $request){
        $slug=request('slugid');
        $rules = [
            'Nama_jasa' => 'required|max:255',
            'harga' => 'required'
        ];

        if($request->slug != $slug){
            $rules['slug'] = 'required|unique:jasa_kirims';
        }

        $validatedData = $request->validate($rules);

        JasaKirim::where('slug', $slug)->update($validatedData);
        return redirect('/jasakirim')->with('success', 'Data jasa kirim berhasil diupdate');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(JasaKirim::class, 'slug', $request->Nama_jasa);
        return response()->json(['slug' => $slug]);
    }
}
