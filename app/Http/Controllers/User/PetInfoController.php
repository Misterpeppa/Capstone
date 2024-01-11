<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\MedHistory;
use App\Models\Admin\PetInfo;
use App\Models\Admin\PetRecord;
use App\Models\Admin\SurgHistory;
use App\Models\Admin\VaxHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetInfoController extends Controller
{
    public function addPet(Request $request)
    {
        $pet_infos = new PetInfo();
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
        $ownerId = Auth::guard('clients')->id();

        $petrecord = new PetRecord([
            'pet_id' => $petId,
            'owner_id' => $ownerId
        ]);
        $petrecord->save();

        return redirect()->route('client.pet')->with('success', 'Pet Successfully Added');
    }
    public function showMedHis($id)
    {
        $ownerId = Auth::guard('clients')->id();
        $petrecord = PetRecord::where('owner_id', $ownerId)->where('id', $id)->first();
        $medHistory = $petrecord->medHistory;
        return response()->json($medHistory);
    }
    public function showVaxHis($id)
    {
        $ownerId = Auth::guard('clients')->id();
        $petrecord = PetRecord::where('owner_id', $ownerId)->where('id',$id)->first();
        $vaxHistory = $petrecord->vaxHistory;
        return response()->json($vaxHistory);
    }
    public function showSurgHis($id)
    {
        $ownerId = Auth::guard('clients')->id();
        $petrecord = PetRecord::where('owner_id', $ownerId)->where('id',$id)->first();
        $surgHistory = $petrecord->surgHistory;
        return response()->json($surgHistory);
    }
    
}
