<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\testingForgotEmail;
use App\Http\Services\Services;
use Illuminate\Support\Facades\Auth;

class Controller
{

    protected $services;

    public function __construct(Services $services){
        $this->services = $services;
    }

    public function login()
    {
        return view("login");
    }

    public function notification($id)
    {
        return view("notification.notification", ['oid' => $id]);
    }

    public function register()
    {
        return view("register");
    }

    public function changePassword()
    {
        return view('requestForgot');
    }
    
    public function registerAccount(Request $request)
    {
        return $this->services->registerAccount($request);
    }

    public function loginAccount(Request $request)
    {
        return $this->services->loginAccount($request);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('back');
    }

    protected function authenticated($user)
    {
        if ($user->type == 0) {
            return redirect()->route('admin');
        } else if ($user->type == 1) {
            return redirect()->route('ref-dashboard');
        } else if ($user->type == 2) {
            return redirect()->route('homepage');
        } else {
            return redirect()->route('notFound');
        }
    }
    
}