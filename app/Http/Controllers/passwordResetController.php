<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use App\Models\User;
use App\Http\Services\PasswordResetServices;

class passwordResetController extends Controller
{
    protected $resetPassword;

    public function __construct(PasswordResetServices $resetPassword){
        $this->resetPassword = $resetPassword;
    }

    public function requestFormForgotPassword(){
        return view('fpassword');
    }

    public function sendResetLinkEmail(Request $request){
        return $this->sendResetLinkEmailPrivate($request);
    }

    public function showResetForm(Request $request, $token = null){
        return $this->showResetFormPrivate($request, $token);
    }

    public function reset(Request $request){
        return $this->resetPrivate($request);
    }

    private function sendResetLinkEmailPrivate(Request $request){
        return $this->resetPassword->sendResetLinkEmail($request);
    }

    private function showResetFormPrivate(Request $request, $token = null){
        return $this->resetPassword->showResetForm($request, $token);
    }

    private function resetPrivate(Request $request){
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required'
        ]);
    
        $response = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->setRememberToken(Str::random(60));
                $user->save();
            }
        );
    
        if ($response === Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', 'Password reset successfully.');
        }
    
        return back()->withErrors(['email' => trans($response)]);
    }
}
