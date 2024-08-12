<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\testingForgotEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Controller
{
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
        return view('requestForgot', ['id' => $id]);
    }

    public function sentEmailForgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->input('email');

        Mail::to($email)->send(new testingForgotEmail($email, encryptData($email)));

        return redirect()->back()->with('success', 'Email Sent!');
    }

    public function registerAccount(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required',
            'type' => 'required|string|max:3',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        User::create([
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'type' => $request->input('type'),
            'password' => $request->input('password'),
            'status' => 1,
        ]);

        return redirect()->back()->with("success", "Registration Successful!");
    }

    public function loginAccount(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            $user = Auth::user();

            return $this->authenticated($request, $user);
        }

    }


    protected function authenticated(Request $request, $user)
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