<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'email' => 'The provided email address is incorrect.',
            'password' => 'The provided password is incorrect.',
        ]);
        
    }
    public function signout(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/signin')->with('reload', true);    
    }
}
