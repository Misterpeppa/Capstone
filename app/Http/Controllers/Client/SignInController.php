<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Admin\Clients;

class SignInController extends Controller
{
    public function showSignInForm()
    {
        return view('auth.signin');
    }

    public function authenticate(Request $request)
    {
        // Perform validation (example validation, modify according to your needs)
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::guard('clients')->attempt($credentials)) {
            // Authentication passed
            return redirect()->route('landing');
        } else {
            // Authentication failed
            $client = Clients::where('email', $request->email)->first();
            if (!$client) {
                // Incorrect email
                return back()
                    ->withErrors(['usernameNotice' => 'Email not found in records.'])
                    ->withInput($request->except('password'));
            } else {
                // Incorrect password
                return back()
                    ->withErrors(['passwordNotice' => 'Incorrect password.'])
                    ->withInput($request->except('password'));
            }
        }
    }
    public function showForgotPasswordForm()
    {
        return view('auth.forgotpass');
    }
}
