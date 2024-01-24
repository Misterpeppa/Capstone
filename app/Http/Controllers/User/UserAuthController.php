<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Mail\ForgotPass;
use App\Mail\VerifyEmail as MailVerifyEmail;
use Illuminate\Http\Request;
use App\Models\User\Clients;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
use App\Rules\Password;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Cache;

class UserAuthController extends Controller
{
    public function showSignup()
    {
        if (Auth::guard('clients')->check()) {
            return redirect()->route('landing');
        }
        return view('user/signup');
    }

    public function signup(Request $request)
    {   
        $email = $request->input('email');
        $phone = $request->input('phone');
        $password = $request->input('password');
        $first_name = $request->input('first_name');
        $middle_name = $request->input('middle_name');
        $last_name = $request->input('last_name');
        $gender = $request->input('gender');
        $birthdate = $request->input('birthdate');
        $emailExists = Clients::where('email', $request->email)->exists();
        if ($emailExists) {
            return redirect()->back()->withErrors(['email' => 'The email has already been taken.']);
        }
        $request->validate([
            // Add any validation rules you need
            'suffix' => 'nullable',
            'specify_suffix' => 'required_if:suffix,Other',
        ]);
        $suffix = $request->input('suffix');
        $specifySuffix = $request->input('specify_suffix');
        // Create a new client
        $clients = new Clients();
        $clients->first_name = $first_name;
        $clients->middle_name = $middle_name;
        $clients->last_name = $last_name;
        $clients->gender = $gender;
        $clients->birthdate = $birthdate;
        $clients->email = $email;
        $clients->phone = $phone;
        $clients->password = bcrypt($password);
        if ($suffix === 'Other') {
            $clients->suffix = $specifySuffix;
        } else {
            $clients->suffix = $suffix;
        }
        $clients->save();
        // Log in the user
        Auth::login($clients);
        // Redirect to a success page or perform any additional actions
        return redirect()->route('client.signup')->with('success', 'User registered successfully');
    }
    protected function sendVerificationEmail($clients)
    {
       Mail::to($clients->email)->send(new MailVerifyEmail($clients));
    }

    public function showSignin()
    {
        return view('user/signin');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // if ($this->hasTooManyLoginAttempts($request)) {
        //     $this->fireLockoutEvent($request);
        //     return $this->sendLockoutResponse($request);
        // }
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember_me');
        
        if (Auth::guard('clients')->attempt($credentials, $remember)) {
            // Authentication passed
            $request->session()->regenerate();
            $client = Auth::guard('clients')->user();
            Auth::login($client,$remember = true);
            // Check if the email is already verified
            if ($client->email_verified_at === null) {
                $this->sendVerificationEmail($client);
            }
            //$this->clearLoginAttempts($request); // Reset the login attempts
            return redirect()->route('landing');
        } else {
           // $this->incrementLoginAttempts($request); // Increment login attempts
            $client = Clients::where('email', $request->email)->first();
            if (!$client) {
                return back()
                    ->withErrors(['email' => 'Email and password do not match.'])
                    ->withInput($request->except('password'));
            } else {
                return back()
                    ->withErrors(['password' => 'Email and password do not match.'])
                    ->withInput($request->except('password'));
            }
        }
        
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('clients')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/user/signin')->with('reload', true);    
    }

    public function showForgotpass()
    {
        return view('user/forgotpass');
    }
    public function forgotPass(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:clients,email',
        ]);
        $clients = Clients::where('email', $request->email)->first();
        if (!$clients) {
            // Handle the case where the user does not exist
            return redirect()->back()->with('error', 'User not found.');
        }
        
        $resetCode = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
        $hashedResetCode = Hash::make($resetCode);

        Cache::put('reset_code_' , $resetCode, now()->addMinutes(10));
        session(['reset_email' => $clients->email]);

        Mail::to($clients->email)->send(new ForgotPass($resetCode));
        return redirect()->route('code.form', ['resetCode' => $hashedResetCode]);

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
            return redirect()->route('reset.form');
        } else {
            // Invalid reset code, redirect back with an error message
            return back()->with('error', 'Invalid reset code. Please check your code and try again.');
        }
    }
    public function showCodeForm()
    {
        $email = session('reset_email');    
        return view('user/forgotpassCode', ['email' => $email]);
    }
    public function showPasswordReset()
    {
        $email = session('reset_email');

        return view('user/forgotpassReset',['email' => $email]);
    }
    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed|min:8', 
        ]);
        $email = session('reset_email');
        $clients= Clients::where('email', $email)->first();
        $clients->update([
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('client.signin')->with('success', 'Password updated successfully. You can now login with your new password.');
    }
    
}

