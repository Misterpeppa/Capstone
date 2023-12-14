<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $clientId = Auth::guard('clients')->id();
        $clientInfo = Clients::find($clientId);
 
        return view('user/profile', compact('clientInfo'));
    }
    public function showPass()
    {
        $clientId = Auth::guard('clients')->id();
        $clientInfo = Clients::find($clientId);
        return view('user/password_security', compact('clientInfo'));
    }
    public function landing()
    {
        $clientId = Auth::guard('clients')->id();
        $clientInfo = Clients::find($clientId);
        return view('user/landing', compact('clientInfo'));
    }
    public function editProfile(Request $request)
    {
        $clientId = Auth::guard('clients')->id();
    
        // Retrieve the client model from the database
        $client = Clients::find($clientId);        
        $client->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            // Add other fields as needed
        ]);
    }
}
