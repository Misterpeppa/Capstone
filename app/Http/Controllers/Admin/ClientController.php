<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User\Clients;

class ClientController extends Controller
{
    public function show()
    {
        $clientInfo = Clients::all();

        return view('/admin/admin_client', compact('clientInfo'));
    }

    public function store(Request $request)
    {
        $clientInfo = new Clients();
        $clientInfo->first_name = $request->input('first_name');
        $clientInfo->last_name = $request->input('last_name');
        $clientInfo->suffix = $request->input('suffix');
        $clientInfo->birthdate = $request->input('birthdate');
        $clientInfo->email = $request->input('email');
        $clientInfo->phone = $request->input('phone');
        $clientInfo->save();

        // Redirect to a success page or perform any additional actions
        return redirect('/admin/client');
    }

}
