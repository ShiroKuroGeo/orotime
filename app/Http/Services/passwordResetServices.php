<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use App\Models\User;

class PasswordResetServices
{

    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        $response = Password::sendResetLink(
            $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT
            ? back()->with('status', __($response))
            : back()->withErrors(['email' => __($response)]);
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('changePassword')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    public function resetPassword(Request $request)
    {
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
            return redirect('/login')->with('status', 'Password reset successfully.');
        }
    
        return back()->withErrors(['email' => trans($response)]);
    }


    protected function validateEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);
    }

}

?>