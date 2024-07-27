<?php

namespace App\Http\Controllers;

class Controller
{
    public function login(){
        return view("login");
    }

    public function register(){
        return view("register");
    }

    public function forgotPassword(){
        return view('fpassword');
    }

    public function logout(){
        return view('');
    }
}
