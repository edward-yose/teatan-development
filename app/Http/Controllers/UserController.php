<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'password_confirmation' => ['required', 'same:password']
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return view('login');
    }

    public function login(Request $request){


        $request->validate([
           'email' => 'required',
           'password' => 'required'
        ]);

        $credential = $request->only(['email', 'password']);

        if(Auth::attempt($credential)){
            return redirect()->route('show-home');
        }

        return redirect()->back();
    }

    public function profile(){
        $user = Auth::user();
        return view('editprofile', ['user' => $user]);
    }

    public function update(Request $request){
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        return redirect()->back();
    }
}
