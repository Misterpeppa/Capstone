<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\AppointmentApprovedMail;
use App\Models\Admin\AppointmentApproved;
use App\Models\Admin\AppointmentPending;
use App\Models\Admin\MedHistory;
use App\Models\Admin\PetInfo;
use App\Models\Admin\VaxInfo;
use App\Models\Admin\MedInfo;
use App\Models\Admin\PetRecord;
use App\Models\Admin\SurgHistory;
use App\Models\Admin\VaxHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetInfoController extends Controller
{
    public function addPet(Request $request)
    {
        $ownerId = Auth::guard('clients')->id();
        $pet_infos = new PetInfo();
        $pet_infos->owner_id = $ownerId;
        $pet_infos->name = $request->input('pet_name');
        $pet_infos->age = $request->input('pet_age');
        $pet_infos->species = $request->input('species');
        $pet_infos->breed = $request->input('breed');
        $pet_infos->birthdate = $request->input('pet_birthdate');
        $pet_infos->gender = $request->input('gender');
        $pet_infos->weight = $request->input('weight');
        $pet_infos->sterilization = $request->input('sterilization');
        $pet_infos->save();
        $petId = $pet_infos->id;

        $petrecord = new PetRecord([
            'pet_id' => $petId,
            'owner_id' => $ownerId
        ]);
        $petrecord->save();

        return redirect()->route('client.pet')->with('success', 'Pet Successfully Added');
    }
    public function editPet(Request $request)
    {
        // Retrieve existing pet info or create a new one
        $petId = $request->input('pet_id');
        $pet_infos = PetInfo::find($petId);
        $ownerId = Auth::guard('clients')->id();
        // Update or set the fields
        $pet_infos->owner_id = $ownerId;
        $pet_infos->name = $request->input('pet_name');
        $pet_infos->age = $request->input('pet_age');
        $pet_infos->species = $request->input('species');
        $pet_infos->breed = $request->input('breed');
        $pet_infos->birthdate = $request->input('pet_birthday');
        $pet_infos->gender = $request->input('gender');
        $pet_infos->weight = $request->input('weight');
        $pet_infos->sterilization = $request->input('sterilization');
        $pet_infos->save();
        // Update or create the pet record
        return redirect()->route('client.pet')->with('edit_success', 'Pet Successfully Updated');
    }
    public function appointmentPet(Request $request)
    {
        $clientId = Auth::guard('clients')->id();
        // $petId = $request->input('petId');
        // $pet_infos = PetInfo::where('owner_id', $clientId)
        // ->where('id', $petId)
        // ->first();
        $appointment = new AppointmentPending();
        $appointment->user_id = $clientId;
        $appointment->petName = $request->input('petName');
        $appointment->petType = $request->input('petType');
        $appointment->breed = $request->input('breed');
        $appointment->notes = $request->input('notes');
        $appointment->appointmentType = $request->input('appointmentType');
        $appointment->appointmentDate = $request->input('appointmentDate');
        $appointment->appointmentTime = $request->input('appointmentTime');
        $appointment->save();

        return redirect()->route('appointment.list')->with('appointment_success', 'Appointment Successfull');
    }
    public function petInfo($id)
    {
        // Get the owner ID from the authenticated client
        $ownerId = Auth::guard('clients')->id();
        // Find the pet information using the owner ID and the provided $id
        $petInfo = PetRecord::where('owner_id', $ownerId)
                        ->where('id', $id)
                        ->with('pet') // Eager load the associated pet
                        ->first();
        // Check if the pet info exists
        if ($petInfo) {
            // Return the pet info as JSON
            return response()->json($petInfo);
        } else {
            // Return an error message if the pet info is not found
            return response()->json(['error' => 'Pet information not found'], 404);
        }
    }

    public function viewRecord($id)
    {
        $petrecord = PetRecord::with('owner', 'pet')->find($id);
        $petInfo = $petrecord->pet;
        $ownerInfo = $petrecord->owner;

        return response()->json([
            'petrecord' => $petrecord,
            'petInfo' => $petInfo,
            'ownerInfo' => $ownerInfo,
        ]);
    }
    public function showMedHis($id)
    {
        $ownerId = Auth::guard('clients')->id();
        $petrecord = PetRecord::where('owner_id', $ownerId)->where('id', $id)->first();
        $medHistory = MedHistory::with('med')->where('petrecord_id', $petrecord->id)->get();
        return response()->json($medHistory);
    }
    public function showVaxHis($id)
    {
        $ownerId = Auth::guard('clients')->id();
        $petrecord = PetRecord::where('owner_id', $ownerId)->where('id',$id)->first();
        $vaxHistory = VaxHistory::with('vax')->where('petrecord_id', $petrecord->id)->get();
        return response()->json($vaxHistory);
    }
    public function showSurgHis($id)
    {
        $ownerId = Auth::guard('clients')->id();
        $petrecord = PetRecord::where('owner_id', $ownerId)->where('id',$id)->first();
        $surgHistory = SurgHistory::with('med')->where('petrecord_id', $petrecord->id)->get();
        return response()->json($surgHistory);
    }
    
}
