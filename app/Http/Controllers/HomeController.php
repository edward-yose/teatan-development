<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Drink;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function get(){
        $drink = Drink::paginate(5);
        return view('home', ['books' => $drink]);
    }
}
