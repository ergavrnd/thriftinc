<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        $credentials= $request->validate([
            "email" => 'required|email',
            "password" => 'required'
        ]);
        // dd("erga cantik");
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(auth()->user()->role_id !== 1){
                return redirect()->intended('/');
            }else{
                return redirect()->intended('/homeadmin');
            }

        }

        return back()->with('loginError', 'Login Failed, Please try again!');

    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
