<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'pass' => ['required'],
            'confirm_pass' => ['required', 'same:pass']
        ]);


        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect()->back();
    }

    public function login(Request $request){
        $request->validate([
           'email' => 'required',
           'password' => 'required'
        ]);
        $credential = $request->only(['email', 'password']);

        if(Auth::attempt($credential)){
            return redirect()->intended('/');
        }

        return redirect()->back();
    }
}
