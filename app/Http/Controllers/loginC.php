<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginC extends Controller
{
    public function login()
    {
        return view('frontend.pages.login');
    }

    public function register()
    {
        return view('frontend.pages.register');
    }

    public function store_register(Request $request)
    {
        $request->validate([
            'nickname'=>'required|string',
            'email'=>'required|unique:user',
            'password'=>'required|min:5',
        ]);

        $password = Hash::make($request->password);

        $user = new User;
        $user->nickname = $request->nickname;
        $user->email = $request->email;
        $user->password = $password;
        $user->role = 'user';
        $user->save();

        return redirect()->route('login');
    }

    public function act_login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            if(Auth::User()->role === 'admin')
            {
                return redirect()->route('dashboard');
            }
            if(Auth::User()->role === 'author')
            {
                return redirect()->route('dashboard');
            }

            if(Auth::User()->role === 'user')
            {
                return redirect()->route('frontend');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('frontend');
    }
}
