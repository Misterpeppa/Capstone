<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\Clients;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
use App\Rules\Password;

class UserAuthController extends Controller
{
    public function showSignup()
    {
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
        $suffix = $request->input('suffix');
        $gender = $request->input('gender');
        $birthdate = $request->input('birthdate');

        // Create a new client
        $clients = new Clients();
        $clients->first_name = $first_name;
        $clients->middle_name = $middle_name;
        $clients->last_name = $last_name;
        $clients->suffix = $suffix;
        $clients->gender = $gender;
        $clients->birthdate = $birthdate;
        $clients->email = $email;
        $clients->phone = $phone;
        $clients->password = bcrypt($password);
        $clients->save();
        

        // Dispatch the Registered event
        //event(new Registered($clients));

        // Log in the user
        Auth::login($clients);

        // Redirect to a success page or perform any additional actions
        return redirect('/user/signin');
    }

    public function showSignin()
    {
        return view('user/signin');
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
        $request->session()->regenerate();
       
        return redirect()->route('landing');
    } else {
        // Authentication failed
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

    public function logout()
    {
        Auth::logout();

        return redirect('/user/signin');
    }
}
