<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function Logout()
    {
        return view('index');
    }
}
