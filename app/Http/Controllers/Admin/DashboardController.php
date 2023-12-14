<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AppointmentApproved;
use App\Models\User\Clients;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $appointment_approved = AppointmentApproved::orderByDesc('appointmentDate')->get();
        // $completedAppoitments = AppointmentApproved::where('status', 'completed')->count();
        // $staffCount = Staff::count();
        $clients = Clients::count();

        return view('admin/dashboard', compact('appointment_approved', 'clients'));
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
        return redirect('/admin/dashboard');
    }

}
