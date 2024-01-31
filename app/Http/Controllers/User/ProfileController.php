<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\MedHistory;
use App\Models\Admin\PetInfo;
use App\Models\Admin\VaxInfo;
use App\Models\Admin\MedInfo;
use App\Models\Admin\PetRecord;
use App\Models\Admin\SurgHistory;
use App\Models\Admin\VaxHistory;
use App\Models\User\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Svg\Tag\Rect;

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
    public function showPetInfo(Request $request)
    {
        $clientId = Auth::guard('clients')->id();
        $clientInfo = Clients::find($clientId);
        $query = PetRecord::where('owner_id', $clientId)->whereNull('archived_at');
        //$petrecordExist = $petrecords->isNotEmpty();
        $petExist = PetRecord::where('owner_id', $clientId)->exists();

        $searchTerm = $request->input('search');

        $query->whereHas('pet', function ($petQuery) use ($searchTerm) {
            $petQuery->where('name', 'like', '%' . $searchTerm . '%')
                ->orWhere('breed', 'like', '%' . $searchTerm . '%');
        });
        $gender = $request->input('gender');
        if ($gender) {
            $query->whereHas('pet', function ($petQuery) use ($gender) {
                $petQuery->where('gender', $gender);
            });
        }
        $petrecords = $query->get();

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
        $client = Clients::find($clientId);
        $currentPassword = $request->input('current_password');
        $newPassword = $request->input('new_password');
        $newPasswordConfirm = $request->input('new_password_confirmation');
        if (Hash::check($currentPassword, $client->password)) {
            $client->password = Hash::make($newPassword);
            $client->save();
            return redirect()->route('client.settings')->with('success', 'Password changed successfully.');
        } else {
            dd('Current password is incorrect');

            return redirect()->back()->withErrors(['current_password' => 'Incorrect current password.']);
        }
    }
}
