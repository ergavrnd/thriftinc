<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(){
        return view('profile');
    }

    public function edit(){
        return view ('editprofile', [
            "profile" => User::where('id', auth()->user()->id)->get()
        ]);
    }

    public function update(Request $request){
        // dd("erga cantik");
        $username=request('username');
        $rules = [
            "nama" => 'required|max:255',
            "notelp" => 'required|min:10|max:20',
            "alamat" => 'required|max:255',
            "jenis_kelamin" => 'required',
            "image" => 'image|file|max:10240'

        ];

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('img-profile');
        }
        if($request->username != $username){
            $rules['username'] = 'required|min:5|max:100';
        }
        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('img-profile');
        }

        User::where('id', auth()->user()->id)->update($validatedData);
        return redirect('/profile')->with('success', 'Profile berhasil diupdate!');
    }
}
