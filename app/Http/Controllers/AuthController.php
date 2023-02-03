<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');

    }
    public function postlogin(Request $request){

    $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];
    $message = [
        'email.required' => 'Mohon Isikan Email anda',
        'email.email' => 'Mohon Isi email dengan benar',
        'password.required' => 'Mohon isi password anda',
        'password.min' => 'password minimal 8 karakter',
    ];
    $Validator = Validator::make($request->all(), $rules, $message);

    if ($Validator->fails()) {
        return redirect()->back()->withErrors($Validator)->withInput($request->all);
    }
    $data = [
        'email' => $request->email,
        'password' => $request->password,
    ];
    if ($request->has('remember')) {
        $remember = true;
    } else {
        $remember = false;
    }

    Auth::attempt($data, $remember);

    if (Auth::check()) {
        return redirect()->to('/dashboard');
    }
    return back()->with('loginError', 'Email atau Password Salah!');
}
    public function logout(){
        Auth::logout();
        return redirect()->to('/login');
    }
    
}
