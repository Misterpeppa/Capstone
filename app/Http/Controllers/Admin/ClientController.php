<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AppointmentApproved;
use App\Models\Admin\PetInfo;
use App\Models\Admin\PetRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User\Clients;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use ErlandMuchasaj\Sanitize\Sanitize;

class ClientController extends Controller
{
    // public function show()
    // {
    //     $clients = Clients::paginate(10);
        

    //     return view('/admin/admin_client', compact('clients'));
    // }


    
    public function show(Request $request)
    {
        $lastVisit = AppointmentApproved::where('status', 'completed')->orderByDesc('appointmentDate')->first();
        $perPage = $request->input('perPage',5);
        $query = $request->input('q');
        $sort = $request->input('sortBy'); 
        $sortOrder = $request->input('sortOrder'); 
        $clients = Clients::query()->whereNull('archived_at')->with('appointmentapproved');
        if ($query) {
            $query = explode(' ', $query);
            foreach ($query as $term) {
                $query = $term; // <== clean user input
            
                $query = str_replace(['%', '_'], ['\\%', '\\_'], $query);
            
                $searchTerm = '%'.$query.'%';
    
                $clients->where(function ($queryBuilder) use ($searchTerm) {
                    $queryBuilder->where('first_name', 'like', '%' . $searchTerm . '%')
                                 ->orWhere('last_name', 'like', '%' . $searchTerm . '%')
                                 ->orWhere('middle_name', 'like', '%' . $searchTerm . '%')
                                 ->orWhere('suffix', 'like', '%' . $searchTerm . '%')
                                 ->orWhere('email', 'like', '%' . $searchTerm . '%')
                                 ->orWhere('phone', 'like', '%' . $searchTerm . '%')
                                 ->orWhere('birthdate', 'like', '%' . $searchTerm . '%');
                });
            }

        }

        $sortField = [
            0 => 'first_name',
            1 => 'email',
            2 => 'phone',
            3 => 'birthdate',
        ][$sort] ?? 'first_name';
        $sortDirection = $sortOrder == 1 ? 'desc' : 'asc';
        $clients = $clients->orderBy($sortField, $sortDirection)->get();

        $perPage = filter_var($perPage, FILTER_VALIDATE_INT);
        if ($perPage === false || $perPage < 5) {
            $perPage = 6; 
        }
        // else{
        //     $perPage += 1;
        // }
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $clients->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $clients = new LengthAwarePaginator($currentPageItems, $clients->count(), $perPage);
        $clients->withPath('/admin/client');
        
        return view('/admin/admin_client', compact('clients', 'query', 'lastVisit'));
    }
    
    
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:clients,email',
            'phone' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'nullable', // Make gender nullable
            'birthdate' => 'required',
            'suffix' => 'nullable', // Make suffix nullable
            'specify_suffix' => 'required_if:suffix,Other',
        ]);

        $clients = new Clients();
        $clients->first_name = $request->input('first_name');
        $clients->middle_name = $request->input('middle_name');
        $clients->last_name = $request->input('last_name');
        $clients->gender = $request->input('gender');
        $clients->birthdate = $request->input('birthdate');
        $clients->email = $request->input('email');
        $clients->phone = $request->input('phone');
        
        $suffix = $request->input('suffix');
        $specifySuffix = $request->input('specify_suffix');
        if ($suffix === 'Other') {
            $clients->suffix = $specifySuffix;
        } else {
            $clients->suffix = $suffix;
        }

        $clients->save();

        return redirect()->route('admin_client')->with('success', 'Client registered successfully');
    }

    public function editClient(Request $request)
    {
        $clients = Clients::find($request->input('client_id')) ?? new Clients();
        $clients->first_name = $request->input('first_name');
        $clients->middle_name = $request->input('middle_name');
        $clients->last_name = $request->input('last_name');
        $clients->gender = $request->input('gender');
        $clients->birthdate = $request->input('birthdate');
        $clients->email = $request->input('email');
        $clients->phone = $request->input('phone');
        $request->validate([
            // Add any validation rules you need
            'suffix' => 'required',
            'specify_suffix' => 'required_if:suffix,Other',
        ]);
        $suffix = $request->input('suffix');
        $specifySuffix = $request->input('specify_suffix');
        if ($suffix === 'Other') {
            $clients->suffix = $specifySuffix;
        } else {
            $clients->suffix = $suffix;
        }
        $clients->save();
    }
    public function archiveClient(Request $request)
    {
        $clientId = $request->input('client_id');
        $client = Clients::find($clientId);
        $client->archived_at = now();
        $client->save();
        return redirect()->back()->with('success', 'Client archived successfully.');
    }
    public function viewPet($id)
    {
        $clientId = $id;
        //$clientInfo = Clients::find($clientId);
        $petrecords = PetRecord::with('pet')->where('owner_id', $clientId)->whereNull('archived_at')->get();
        //$petExist = PetRecord::where('owner_id', $clientId)->exists();

        return response()->json($petrecords);
    }
    public function addPet(Request $request)
    {
        $ownerId = $request->input('clientId');
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

}