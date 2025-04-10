<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class SsignUpController extends Controller
{
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    public function processSignup(Request $request)
    {
        // Validation logic for the signup form
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);
        
        // Capitalize the first letter of first_name and last_name
        $firstName = ucfirst($validatedData['first_name']);
        $lastName = ucfirst($validatedData['last_name']);

        // Create a new user instance
        $user = new User();
        $user->first_name = $firstName;
        $user->last_name = $lastName;
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);

        // Save the user to the database
        $user->save();

        // Redirect the user to the desired page after successful signup
        return redirect()->route('auth.signin');
    }

}
