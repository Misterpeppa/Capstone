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
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Auth\Notifications\VerifyEmail;

class UserAuthController extends Controller
{
    public function showSignup()
    {
        if (Auth::guard('clients')->check()) {
            // Redirect to the home page or another appropriate route
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
            'suffix' => 'required',
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

        Notification::send($clients, new VerifyEmail);
        
        event(new Registered($clients));

        // Log in the user
        //Auth::login($clients);

        // Redirect to a success page or perform any additional actions
        return redirect()->route('client.signup')->with('success', 'User registered successfully');
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
        $remember_token = $request->has('remember');
        
        if (Auth::guard('clients')->attempt($credentials, $remember_token)) {
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

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('clients')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/user/signin')->with('reload', true);    
    }
}

// switch (count($validatedData['breed'])) {
//     case 1:
//         AppointmentPending::create([
//             'user_id' => $clientId, // Use the same $clientId for all records
//             'petType' => $validatedData['petType'][0],
//             'breed' => $validatedData['breed'][0],
//             'appointmentType' => $validatedData['appointmentType'][0],
//             'appointmentDate' => $validatedData['appointmentDate'][0],
//             'appointmentTime' => $validatedData['appointmentTime'][0],
//         ]);
//         break;

//     case 2:
//         for ($i = 0; $i < 2; $i++) {
//             if (isset($validatedData['breed'][$i])) {
//                 AppointmentPending::create([
//                     'user_id' => $clientId, // Use the same $clientId for all records
//                     'petType' => $validatedData['petType'][$i],
//                     'breed' => $validatedData['breed'][$i],
//                     'appointmentType' => $validatedData['appointmentType'][$i],
//                     'appointmentDate' => $validatedData['appointmentDate'][$i],
//                     'appointmentTime' => $validatedData['appointmentTime'][$i],
//                 ]);
//             }
//         }
//         break;

//     case 3:
//         for ($i = 0; $i < 3; $i++) {
//             if (isset($validatedData['breed'][$i])) {
//                 AppointmentPending::create([
//                     'user_id' => $clientId, // Use the same $clientId for all records
//                     'petType' => $validatedData['petType'][$i],
//                     'breed' => $validatedData['breed'][$i],
//                     'appointmentType' => $validatedData['appointmentType'][$i],
//                     'appointmentDate' => $validatedData['appointmentDate'][$i],
//                     'appointmentTime' => $validatedData['appointmentTime'][$i],
//                 ]);
//             }
//         }
//         break;
//     default:
//         // Handle unexpected number of pets
//         break;
// }