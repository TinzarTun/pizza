<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // get register
    public function register()
    {
        return view('register');
    }

    // get login
    public function getlogin()
    {
        return view('login');
    }

    // logout
    public function logout()
    {
        //
    }

}
