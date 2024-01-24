<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\MedHistory;
use App\Models\Admin\MedInfo;
use App\Models\Admin\PetInfo;
use App\Models\Admin\PetRecord;
use App\Models\Admin\SurgHistory;
use App\Models\Admin\VaxHistory;
use App\Models\Admin\VaxInfo;
use App\Models\User\Clients;
use Svg\Tag\Rect;

class EMRController extends Controller
{
    public function show()
    {
        $owners = Clients::withTrashed()->get();
        $petrecord = PetRecord::with('pet', 'owner')->whereNull('archived_at')->get();
        $medHistory = MedHistory::all();
        $vaxHistory = VaxHistory::all();
        $surgHistory = SurgHistory::all();
        $medHistoryExist = $medHistory->isNotEmpty();
        $vaxHistoryExist = $vaxHistory->isNotEmpty();
        $surgHistoryExist = $surgHistory->isNotEmpty();
        $medInfo = MedInfo::all();
        $med_info = MedInfo::all();
        $vaxInfo = VaxInfo::all();
        
        return view('/admin/petrecords', compact('owners', 'petrecord','petrecordExists', 'medHistoryExist', 'vaxHistoryExist', 'surgHistoryExist', 
        'medInfo', 'vaxInfo', 'med_info'));
    }

    public function search(Request $request)
    {
        $query = PetRecord::with('pet', 'owner')->whereNull('archived_at');
        $owners = Clients::withTrashed()->get();
        $petrecordExists = $query->get()->isNotEmpty();
        $medHistory = MedHistory::all();
        $vaxHistory = VaxHistory::all();
        $surgHistory = SurgHistory::all();
        $medHistoryExist = $medHistory->isNotEmpty();
        $vaxHistoryExist = $vaxHistory->isNotEmpty();
        $surgHistoryExist = $surgHistory->isNotEmpty();
        $medInfo = MedInfo::all();
        $med_info = MedInfo::all();
        $vaxInfo = VaxInfo::all();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
        
            // Add conditions to the query based on your search requirements
            $query->whereHas('owner', function ($subQuery) use ($searchTerm) {
                $subQuery->where('first_name', 'like', '%' . $searchTerm . '%')
                ->orWhere('middle_name', 'like', '%' . $searchTerm . '%')
                ->orWhere('last_name', 'like', '%' . $searchTerm . '%')
                ->orWhereHas('pet', function ($ownerQuery) use ($searchTerm) {
                    $ownerQuery->where('breed', 'like', '%' . $searchTerm . '%');
                });
            })
            ->orWhereHas('pet', function ($petQuery) use ($searchTerm) {
                $petQuery->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('breed', 'like', '%' . $searchTerm . '%');
            })
            ->orWhere('allergies', 'like', '%' . $searchTerm . '%')
            ->orWhere('existing_condition', 'like', '%' . $searchTerm . '%')
            ->orWhere('current_medication', 'like', '%' . $searchTerm . '%');
            // Add more conditions as needed for other fields
        }

        // Retrieve the results
        $petrecord = $query->get();
        
        return view('/admin/petrecords', compact('owners', 'petrecord','petrecordExists', 'medHistoryExist', 'vaxHistoryExist', 'surgHistoryExist', 
        'medInfo', 'vaxInfo', 'med_info'));
    }

    // public function search(Request $request)
    // {
    //     $query = PetRecord::with('pet', 'owner')->whereNull('archived_at');
    //     $owners = Clients::withTrashed()->get();
    //     $petrecordExists = $query->get()->isNotEmpty();
    //     $medHistory = MedHistory::all();
    //     $vaxHistory = VaxHistory::all();
    //     $surgHistory = SurgHistory::all();
    //     $medHistoryExist = $medHistory->isNotEmpty();
    //     $vaxHistoryExist = $vaxHistory->isNotEmpty();
    //     $surgHistoryExist = $surgHistory->isNotEmpty();
    //     $medInfo = MedInfo::all();
    //     $med_info = MedInfo::all();
    //     $vaxInfo = VaxInfo::all();

    //     // Check if the request has a search term
    //     if ($request->has('search')) {
    //         $searchTerm = $request->input('search');
        
    //         // Add conditions to the query based on your search requirements
    //         $query->whereHas('owner', function ($subQuery) use ($searchTerm) {
    //             $subQuery->where('first_name', 'like', '%' . $searchTerm . '%')
    //             ->orWhere('middle_name', 'like', '%' . $searchTerm . '%')
    //             ->orWhere('last_name', 'like', '%' . $searchTerm . '%')
    //             ->orWhereHas('pet', function ($ownerQuery) use ($searchTerm) {
    //                 $ownerQuery->where('breed', 'like', '%' . $searchTerm . '%');
    //             });
    //         })
    //         ->orWhereHas('pet', function ($petQuery) use ($searchTerm) {
    //             $petQuery->where('name', 'like', '%' . $searchTerm . '%')
    //                 ->orWhere('breed', 'like', '%' . $searchTerm . '%');
    //         })
    //         ->orWhere('allergies', 'like', '%' . $searchTerm . '%')
    //         ->orWhere('existing_condition', 'like', '%' . $searchTerm . '%')
    //         ->orWhere('current_medication', 'like', '%' . $searchTerm . '%');
    //         // Add more conditions as needed for other fields
    //     }

    //     // Retrieve the results
    //     $petrecord = $query->get();

    //     return view('/admin/petrecords', compact('owners', 'petrecord','petrecordExists', 'medHistoryExist', 'vaxHistoryExist', 'surgHistoryExist', 
    //     'medInfo', 'vaxInfo', 'med_info'));

    // }
    public function pet(Request $request)
    {
        $ownerId = $request->input('owner_id');
        $pet_infos = new PetInfo();
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
        $petId = $pet_infos->id;

        $petrecord = new PetRecord([
            'pet_id' => $petId,
            'owner_id' => $ownerId
        ]);
        $petrecord->save();

        return redirect()->route('admin_emr')->with('success', 'Pet Successfully Added');
    }
    public function editPet(Request $request)
    {
        // Retrieve existing pet info or create a new one
        $petId = $request->input('pet_id');
        $pet_infos = PetInfo::find($petId);

        // Update or set the fields
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
    public function archive(Request $request)
    {
        $petrecordId = $request->input('petrecord_id');
        $petrecord = PetRecord::find($petrecordId);
        $petrecord->update(['archived_at' => now()]);
        return redirect()->route('admin_emr')->with('success', 'Pet Successfully Updated');
    }

    public function medHistory(Request $request)
    {
        $medHistory = new MedHistory([
            'petrecord_id' => $request->input('petrecord_id'),
            'diagnosis' => $request->input('diagnosis'),
            'diagnosis_date' => $request->input('diagnosis_date'),
            'treatment' => $request->input('treatment'),
            'med_id' => $request->input('medication'),
            'diagnosis_desc' => $request->input('diagnosis_desc'),
        ]);
        
        $medHistory->save();
        

        return redirect()->route('admin_emr')->with('med_success', 'Pet Successfully Added');
    }
    public function vaxHistory(Request $request)
    {
        $vaxHistory = new VaxHistory([
            'petrecord_id' => $request->input('petrecord_id'),
            'vax_id' => $request->input('vax_id'),
            'vaccination_date' => $request->input('vaccination_date'),
            'revaccination_date' => $request->input('revaccination_date'),
            'status' => $request->input('status'),
        ]);
        $vaxHistory->save();

        return redirect()->route('admin_emr')->with('vax_success', 'Pet Successfully Added');
    }
    public function surgHistory(Request $request)
    {
        $surgHistory = new SurgHistory([
            'petrecord_id' => $request->input('petrecord_id'),
            'surgery_type' => $request->input('surgery_type'),
            'severity' => $request->input('severity'),
            'med_id' => $request->input('med_id'),
            'surgery_date' => $request->input('surgery_date'),
            'surgery_note' => $request->input('surgery_note'),
        ]);
        $surgHistory->save();

        return redirect()->route('admin_emr')->with('surg_success', 'Pet Successfully Added');
    }

    public function showMedHis($id)
    {
        $medHistory = MedHistory::with('med')->where('petrecord_id', $id)->get();
        return response()->json($medHistory);
    }
    public function showVaxHis($id)
    {
        $vaxHistory = VaxHistory::with('vax')->where('petrecord_id', $id)->get();

        return response()->json($vaxHistory);
    }
    public function showSurgHis($id)
    {
        $surgHistory = SurgHistory::with('med')->where('petrecord_id', $id)->get();

        return response()->json($surgHistory);
    }

}