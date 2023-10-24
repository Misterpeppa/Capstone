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
            'email' => 'required|email|unique:clients,email', // Add 'unique:users,email' rule
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

        return view('/user/signin');
    }
}
