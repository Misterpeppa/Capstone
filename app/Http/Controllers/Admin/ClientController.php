<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $perPage = $request->input('perPage',5);
        $query = $request->input('q');
        $sort = $request->input('sortBy'); 
        $sortOrder = $request->input('sortOrder'); 
        $clients = Clients::query()->whereNull('archived_at');
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
        }else{
            $perPage += 1;
        }
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $clients->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $clients = new LengthAwarePaginator($currentPageItems, $clients->count(), $perPage);
        $clients->withPath('/admin/client');
        
        return view('/admin/admin_client', compact('clients', 'query'));
    }
    
    
    public function store(Request $request)
    {
        $email = $request->input('email');
        $phone = $request->input('phone');
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
            'suffix' => 'required',
            'specify_suffix' => 'required_if:suffix,Other',
        ]);
        $suffix = $request->input('suffix');
        $specifySuffix = $request->input('specify_suffix');

        $clients = new Clients();
        $clients->first_name = $first_name;
        $clients->middle_name = $middle_name;
        $clients->last_name = $last_name;
        $clients->gender = $gender;
        $clients->birthdate = $birthdate;
        $clients->email = $email;
        $clients->phone = $phone;
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
        dd($clientId);
        $client->archived_at = now();
        $client->save();
        return redirect()->back()->with('success', 'Client archived successfully.');
    }


}
