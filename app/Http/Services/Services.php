<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Mail\testingForgotEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Services
{

    public function registerAccount(Request $request)
    {
        return $this->registerAccountPrivate($request);
    }

    public function loginAccount(Request $request)
    {
        return $this->loginAccountPrivate($request);
    }

    private function registerAccountPrivate(Request $request)
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

        return redirect()->route('login')->with('success', 200);
    }

    private function loginAccountPrivate(Request $request)
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

        return redirect()->back()->withErrors(['email' => 'The provided credentials are incorrect.'])->withInput();
    }

    protected function authenticated(Request $request, $user)
    {
        switch ($user->type) {
            case 0:
                return redirect()->route('admin');
            case 1:
                return redirect()->route('ref-dashboard');
            case 2:
                return redirect()->route('homepage');
            default:
                return redirect()->route('notFound');
        }
    }

}