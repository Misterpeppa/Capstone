<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User\Clients;
 use Illuminate\Support\Facades\Session;

 use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

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
        
        
        $clients = Clients::query();
        
        if ($query) {
            $clients->where(function ($queryBuilder) use ($query) {
                $queryBuilder->where('first_name', 'like', '%' . $query . '%')
                             ->orWhere('last_name', 'like', '%' . $query . '%')
                             ->orWhere('middle_name', 'like', '%' . $query . '%')
                             ->orWhere('suffix', 'like', '%' . $query . '%')
                             ->orWhere('email', 'like', '%' . $query . '%')
                             ->orWhere('phone', 'like', '%' . $query . '%')
                             ->orWhere('birthdate', 'like', '%' . $query . '%');
            });
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
        $password = $request->input('password');
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
            // Add any validation rules you need
            'suffix' => 'required',
            'specify_suffix' => 'required_if:suffix,Other',
        ]);
        $suffix = $request->input('suffix');
        $specifySuffix = $request->input('specify_suffix');

        // Create a new client
        $clients = new Clients();
        $clients->first_name = $first_name;
        $clients->middle_name = $middle_name;
        $clients->last_name = $last_name;
        $clients->gender = $gender;
        $clients->birthdate = $birthdate;
        $clients->email = $email;
        $clients->phone = $phone;
        $clients->password = bcrypt($password);
        if ($suffix === 'Other') {
            $clients->suffix = $specifySuffix;
        } else {
            $clients->suffix = $suffix;
        }
        $clients->save();

        // Redirect to a success page or perform any additional actions
        return redirect('/admin/client');
    }

}
