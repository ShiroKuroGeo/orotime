<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\testingForgotEmail;
use Illuminate\Support\Facades\Mail;

class Controller
{
    public function login()
    {
        return view("login");
    }

    public function register()
    {
        return view("register");
    }

    public function forgotPassword()
    {
        return view('fpassword');
    }

    public function logout()
    {
        return view('');
    }

    public function forgotPasswordRequest($id)
    {
        return view('requestForgot', ['id' => $id ]);
    }

    public function sentEmailForgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->input('email');

        Mail::to($email)->send(new testingForgotEmail($email, encryptData($email) ));

        return redirect()->back()->with('success', 'Email Sent!');
    }
}
