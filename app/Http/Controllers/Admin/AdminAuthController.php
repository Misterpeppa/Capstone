<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPass;
use App\Models\Admin\Admin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminAuthController extends Controller
{
    public function show()
    {
        return view('admin/admin_signin');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed...
            $request->session()->regenerate();
            return redirect()->route('admin_dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided email address or password is incorrect.',
        ])->withInput($request->only('email'));
    }
    public function signout(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/signin')->with('reload', true);    
    }

    public function showForgotpass()
    {
        return view('admin/forgotpass');
    }
    public function forgotPass(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admin,email',
        ]);
        $admin = Admin::where('email', $request->email)->first();
        if (!$admin) {
            // Handle the case where the user does not exist
            return redirect()->back()->with('error', 'User not found.');
        }
        
        $resetCode = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
        $hashedResetCode = Hash::make($resetCode);

        Cache::put('reset_code_' , $resetCode, now()->addMinutes(10));
        session(['reset_email' => $admin->email]);

        Mail::to($admin->email)->send(new ForgotPass($resetCode));
        return redirect()->route('admin.code.form', ['resetCode' => $hashedResetCode]);

    }
    
    public function checkResetCode(Request $request)
    {
        $email = session('reset_email');

        $request->validate([
            'digit1' => 'required|numeric|digits:1',
            'digit2' => 'required|numeric|digits:1',
            'digit3' => 'required|numeric|digits:1',
            'digit4' => 'required|numeric|digits:1',
            'digit5' => 'required|numeric|digits:1',
            'digit6' => 'required|numeric|digits:1',
        ]);

        $resetCode = $request->digit1 . $request->digit2 . $request->digit3 . $request->digit4 . $request->digit5 . $request->digit6;
        $clientId= Cache::get('reset_code_');

        if ($resetCode == $clientId) {
            // The reset code is valid, allow the user to reset the password
            return redirect()->route('admin.reset.form');
        } else {
            // Invalid reset code, redirect back with an error message
            return back()->with('error', 'Invalid reset code. Please check your code and try again.');
        }
    }
    public function showCodeForm()
    {
        $email = session('reset_email');    
        return view('admin/forgotpassCode', ['email' => $email]);
    }
    public function showPasswordReset()
    {
        $email = session('reset_email');

        return view('admin/forgotpassReset',['email' => $email]);
    }
    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed|min:8', 
        ]);
        $email = session('reset_email');
        $admin= Admin::where('email', $email)->first();
        $admin->update([
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('admin.signin')->with('success', 'Password updated successfully. You can now login with your new password.');
    }
}
