<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Admin\Clients;

class SignInController extends Controller
{
    public function showSignInForm()
    {
        return view('auth/signin');
    }

    public function authenticate(Request $request)
    {
    // Perform validation (example validation, modify according to your needs)
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::guard('client')->attempt($credentials)) {
        // Authentication passed
        $request->session()->regenerate();
        Log::info('User successfully authenticated.');

        // Add debugging logs
        Log::info('Authenticated User ID: ' . Auth::guard('client')->id());
        Log::info('Authenticated User Role: ' . Auth::guard('client')->user()->role);

        return redirect()->route('landing');
    } else {
        // Authentication failed
        Log::warning('Authentication failed.');
        $client = Clients::where('email', $request->email)->first();
        if (!$client) {
            // Incorrect email
            return back()
                ->withErrors(['usernameNotice' => 'Email and password does not match.'])
                ->withInput($request->except('password'));
        } else {
            // Incorrect password
            return back()
                ->withErrors(['passwordNotice' => 'Email and password does not match.'])
                ->withInput($request->except('password'));
        }
    }
    }

    public function showForgotPasswordForm()
    {
        return view('client.forgotpass');
    }
    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}
}
