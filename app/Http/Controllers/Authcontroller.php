<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;
use App\Models\User;


class AuthController extends Controller
{
    public function show_signup(){
        return view('signup');
    }

    public function signup(request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|string|min:8'
        ]);

        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect()->route('index');
    }
    public function show_signin(){
        return view('signin');
    }

    public function login(request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=> 'required'
        ]);
        if(Auth::attempt(['email'=> $request->email,'password'=> $request->password])){
            return redirect()->route('index');
    }
}
}