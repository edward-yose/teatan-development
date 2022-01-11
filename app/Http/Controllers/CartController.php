<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function get(){
        $carts = Cart::where('email', Auth::user()->email)->get();
        return view('cart', ['carts' => $carts]);
    }

    public function checkout(){

        $carts = Cart::where('email', Auth::user()->email)->get();

        $transaction = new TransactionHeader();
        $transaction->email = Auth::user()->email;
        $transaction->total = 0;
        $transaction->save();

        $total = 0;

        foreach ($carts as $cart){
            $detail = new TransactionDetail();
            $detail->productId = $cart->productId;
            $detail->quantity = $cart->quantity;
            $detail->total = $cart->quantity * $cart->product->price;
            $total = $total + $detail->total;
            $detail->save();
        }

        Cart::where('email', Auth::user()->email)->delete();

        $transaction->total = $total;
        $transaction->save();

        return view('qris', ['total' => $total]);
    }
}
