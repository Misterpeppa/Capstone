<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Clients;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
use App\Rules\Password;


class SignupController extends Controller
{
    public function showSignupForm()
    {
        return view('auth/signup');
    }

    public function signup(Request $request): RedirectResponse
    {   
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        
        $ErrorMessage = [
            'first_name.alpha' => 'The first name should only contain alphabetic characters.',
            'last_name.alpha' => 'The last name should only contain alphabetic characters.',
        ];
        // Validate form data
        $validated = Validator::make($request->all(), [
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'email' => 'required|email|unique:users,email', // Add 'unique:users,email' rule
            'password' => ['required', new Password],
            'password_confirmation' => 'required|same:password',
        ],$ErrorMessage);

        if ($validated->fails()) {
            return redirect()->back()
                ->withErrors($validated)
                ->withInput();
        }

        $validatedData = $validated->validated();

        $firstName = ucfirst($validatedData['first_name']);
        $lastName = ucfirst($validatedData['last_name']);

        // Create a new client
        $clients = new Clients();
        $clients->first_name = $firstName;
        $clients->last_name = $lastName;
        $clients->email = $validatedData['email'];
        $clients->password = bcrypt($validatedData['password']);
        $clients->save();
        

        // Dispatch the Registered event
        event(new Registered($clients));

        // Log in the user
        //Auth::login($clients);

        // Redirect to a success page or perform any additional actions
        return redirect('/signin');
    }
}
