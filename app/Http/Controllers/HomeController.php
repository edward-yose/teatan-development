<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function get(){
        $drinks = Product::all();
        return view('home', ['drinks' => $drinks]);
    }
}
