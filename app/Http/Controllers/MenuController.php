<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function get(){
        $drinks = Product::all();
        return view('menu', ['drinks' => $drinks]);
    }
}
