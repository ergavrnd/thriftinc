<?php

namespace App\Http\Controllers;
use App\Models\JasaKirim;
use App\Models\Cart;
use Illuminate\Http\Request;

class CoController extends Controller
{
    public function index(){
        return view('co', [
            "cart" => Cart::all(),
            "jasakirim" => JasaKirim::all()
        ]);
    }

    public function store(Request $request){
        Cart::create([
            'Barang_id' => $request->Barang_id,
            'user_id' => $request->user_id,
            'totalHarga' => $request->totalHarga
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect('/co');
    }

    public function destroy(Request $request)
    {
        Cart::destroy($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect('/co');
}
}
