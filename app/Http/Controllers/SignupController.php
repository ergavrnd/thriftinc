<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index (){
        return view('signup', [

        ]);
    }

    public function store(Request $request){

        $validatedData=$request->validate([
            "nama" => 'required|max:255',
            "username" => 'required|min:5|max:255|unique:users',
            "email" => 'required|email|unique:users',
            "password" => 'required|min:5|max:255',
            "role_id" => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['email_verified_at']=date("Y-m-d H:i:s");
        
        User::create($validatedData);
        return redirect('/login')->with('success', 'Registration successfull! Please Login Your Account');
    }
}
