<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // register
    public function register()
    {
        return view('register');
    }

    // login
    public function login()
    {
        return view('login');
    }

    // logout
    public function logout()
    {
        //
    }

}
