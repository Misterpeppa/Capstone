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
        // Save the pet info
        $pet_infos->save();
        // Update or create the pet record
        return redirect()->route('admin_emr')->with('edit_success', 'Pet Successfully Updated');
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
