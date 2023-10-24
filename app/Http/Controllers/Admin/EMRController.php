<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\EMRvax;
use App\Models\Admin\Allergy;
use App\Models\Admin\Condition;
use App\Models\Admin\OwnerInfo;
use App\Models\Admin\PetInfo;
use App\Models\User\Clients;


class EMRController extends Controller
{
    public function show(){
        $owners = Clients::all();
        return view('/admin/petrecords', compact('owners'));
    }

    public function pet(Request $request){

        $pet_infos = new PetInfo();
        $pet_infos->name = $request->input('pet_name');
        $pet_infos->age = $request->input('pet_age');
        $pet_infos->species = $request->input('species');
        $pet_infos->breed = $request->input('breed');
        $pet_infos->birthdate = $request->input('pet_birthday');
        $pet_infos->gender = $request->input('gender');
        $pet_infos->weight = $request->input('weight');
        $pet_infos->save();

        return redirect()->back();
    }


    public function store(Request $request){
        // Retrieve the form data from the request
        $petName = $request->input('petName');
        $age = $request->input('age');
        $birthdate = $request->input('birthdate');
        $species = $request->input('species');
        $gender = $request->input('gender');
        $weight = $request->input('weight');
        $allergy_name = $request->input('allergies');
        $reaction  = $request->input('reaction');
        $severity = $request->input('severity');
        $vax_name = $request->input('vax_name');
        $effects = $request->input('effects');
        $ownerName = $request->input('ownerName');
        $phone = $request->input('phone');
        $email = $request->input('email');

        $petInfo = new PetInfo();
        $petInfo->name = $request->input('petName');
        $petInfo->age = $request->input('age');
        $petInfo->birthdate = $request->input('birthdate');
        $petInfo->species = $request->input('species');
        $petInfo->gender = $request->input('gender');
        $petInfo->weight = $request->input('weight');
        $petInfo->save();

        $allergy = new Allergy();
        $allergy->allergy_name = $request->input('allergies');
        $allergy->reaction = $request->input('reaction');
        $allergy->severity = $request->input('severity');
        $allergy->save();

        $condition = new Condition;
        $condition->diagnosis = $request->input('diagnosis');
        $condition->med_name = $request->input('med_name');
        $condition->uses = $request->input('uses');
        $condition->side_effects = $request->input('side_effects');
        $condition->save();

        
        $ownerInfo = new OwnerInfo();
        $ownerInfo->name = $request->input('ownerName');
        $ownerInfo->phone = $request->input('phone');
        $ownerInfo->email = $request->input('email');
        $ownerInfo->save();
    }

    public function infoSave(Request $request)
    {
        // Create and save owner's record
        $ownerInfo = new OwnerInfo();
        $ownerInfo->name = $request->input('name');
        $ownerInfo->phone = $request->input('phone');
        $ownerInfo->email = $request->input('email');
        $ownerInfo->save();

        // Create and save pet's record
        $petInfo = new PetInfo();
        $petInfo->name = $request->input('petName');
        $petInfo->age = $request->input('age');
        $petInfo->birthdate = $request->input('birthdate');
        $petInfo->species = $request->input('species');
        $petInfo->breed = $request->input('breed');
        $petInfo->gender = $request->input('gender');
        $petInfo->weight = $request->input('weight');
        $petInfo->save();

        return redirect()->back();
    }

    private function allergySave(Request $request)
    {
        $allergy = new Allergy();
        $allergy->allergy_name = $request->input('allergies');
        $allergy->reaction = $request->input('reaction');
        $allergy->severity = $request->input('severity');
        $allergy->save();

        return redirect()->back();
    }

    private function conditionSave(Request $request)
    {
        $condition = new Condition;
        $condition->diagnosis = $request->input('diagnosis');
        $condition->med_name = $request->input('med_name');
        $condition->uses = $request->input('uses');
        $condition->side_effects = $request->input('side_effects');
        $condition->save();
    }


    public function infoShow()
    {
        $ownerInfo = OwnerInfo::all();
        $petInfo = PetInfo::all();
        $ownerInfos = OwnerInfo::all();

        return view('petrecord', compact('ownerInfo', 'petInfo', 'ownerInfos'));
    }
    
    public function save(Request $request)
    {
    $formType = $request->input('form_type');

    switch ($formType) {
        case 'info':
            $this->infoSave($request);
            break;
        case 'allergy':
            // Handle allergy form submission
            $this->allergySave($request);
            break;
        case 'condition':
            // Handle condition form submission
            $this->conditionSave($request);
            break;
        case 'vax':
            // Handle vaccination form submission
            $this->vaxSave($request);
            break;
        default:
            // Handle unknown form submission
            break;
    }

    return redirect()->back();
    }

}
