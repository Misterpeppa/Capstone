<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\PetInfo;
use App\Models\Admin\PetRecord;
use App\Models\User\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function show()
    {
        $clientId = Auth::guard('clients')->id();
        $clientInfo = Clients::find($clientId);
 
        return view('user/settings', compact('clientInfo'));
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
        if (!$clientInfo || !$clientInfo->email_verified_at) {
            session()->flash('error', 'Please verify your email.');
            return view('user/landing', compact('clientInfo'));
        }
        return view('user/landing', compact('clientInfo'));
    }
    public function showPetInfo()
    {
        $clientId = Auth::guard('clients')->id();
        $clientInfo = Clients::find($clientId);
        $petrecords = PetRecord::where('owner_id', $clientId)->get();
        $petExist = PetRecord::where('owner_id', $clientId)->exists(); // Corrected typo
        return view('user/pet_info', compact('clientInfo', 'petExist', 'petrecords'));
    }
    public function editProfile(Request $request)
    {
        $clientId = Auth::guard('clients')->id();

        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email,' . $clientId,
            'phone' => 'nullable|string|max:20',
        ]);
    
         // Retrieve the client model from the database
        $client = Clients::find($clientId);

        // Update the client model with the validated data
        $client->update($request->only(['first_name', 'middle_name', 'last_name', 'email', 'phone']));
        return redirect()->route('client.settings')->with('success', 'Profile updated successfully');
    }
    public function deleteAccnt()
    {
        $clientId = Auth::guard('clients')->id();
        $client = Clients::find($clientId);

        // Delete the client account
        if ($client) {
            $client->delete();
            
            // Log the user out after deleting the account
            Auth::guard('clients')->logout();

            return redirect()->route('client.signup')->with('success', 'Your account has been deleted successfully.');
        }

        return redirect()->back()->with('error', 'Unable to delete the account.');
    }
    public function changePassword(Request $request)
    {
        $clientId = Auth::guard('clients')->id();

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|different:current_password',
            'new_password_confirmation' => 'required|same:new_password',
        ]);
        $client = Clients::find($clientId);
        if (Hash::check($request->current_password, $client->password)) {
            $client->update($request->only(['password' => Hash::make($request->new_password)]));

            return redirect()->route('home')->with('success', 'Password changed successfully.');
        } else {
            return redirect()->back()->withErrors(['current_password' => 'Incorrect current password.']);
        }
    }
}
