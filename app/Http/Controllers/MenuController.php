<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function get(){
        $drinks = Product::all();
        return view('menu', ['drinks' => $drinks]);
    }

    public function addToCart($id){
        $cart = new Cart();
        $product = Product::find($id);

        $cart->email = Auth::user()->email;
        $cart->total = $product->price;
        $cart->quantity = 1;
        $cart->productId = $product->id;
        $cart->note = "";
        $cart->save();

        return redirect()->back();
    }
}
