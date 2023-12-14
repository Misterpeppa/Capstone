<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentApprovedMail;
use App\Mail\AppointmentRejectedMail;
use Illuminate\Http\Request;
use App\Models\Admin\AppointmentPending;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\AppointmentApproved;
use App\Models\Admin\AppointmentRejected;
use App\Models\User\Clients;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class AppointmentController extends Controller
{
    public function showForm()
    {
        $clientId = Auth::guard('clients')->id();
        $clientInfo = Clients::find($clientId);
        return view('user/appointment',compact('clientInfo'));
    }

    public function store(Request $request)
    {
    $clientId = Auth::guard('clients')->id();
    $validatedData = $request->validate([
        'petType.*'=>'required',
        'breed.*' => 'required',
        'appointmentType.*' => 'required',
        'appointmentDate.*' => 'required|date',
        'appointmentTime.*' => 'required',
    ]);

    // Store the form data in the appointments table
    $count = count($validatedData['breed']);
    for ($i = 0; $i < $count; $i++) {
        // Check if the key exists before accessing it
        if (isset($validatedData['breed'][$i])) {
            AppointmentPending::create([
                'user_id' => $clientId,
                'petType' => $validatedData['petType'][$i],
                'breed' => $validatedData['breed'][$i],
                'appointmentType' => $validatedData['appointmentType'][$i],
                'appointmentDate' => $validatedData['appointmentDate'][$i],
                'appointmentTime' => $validatedData['appointmentTime'][$i],
            ]);
        }
    }

    session()->flash('success', true);
    return redirect()->route('appointment.form');
    }
    
    public function approve(Request $request, $id){
        // Find the appointment details by ID
        $appointment = AppointmentPending::findOrFail($id);

        AppointmentApproved::create([
            'user_id' =>$appointment->user_id,
            'petType' => $appointment->petType,
            'breed' => $appointment->breed,
            'appointmentType' => $appointment->appointmentType,
            'appointmentDate' => $appointment->appointmentDate,
            'appointmentTime' => $appointment->appointmentTime,
        ]);
        // Delete the data from the "appointment_details" table
        $appointment->delete();
        
        $client = Clients::find($appointment->user_id);
        Mail::to($client->email)->send(new AppointmentApprovedMail($appointment));
        
    }

    public function reject(Request $request, $id)
    {
        $appointment = AppointmentPending::findOrFail($id);

        AppointmentRejected::create([
            'user_id' =>$appointment->user_id,
            'petType' => $appointment->petType,
            'breed' => $appointment->breed,
            'appointmentType' => $appointment->appointmentType,
            'appointmentDate' => $appointment->appointmentDate,
            'appointmentTime' => $appointment->appointmentTime,
        ]);
        // Delete the data from the "appointment_details" table
        $appointment->delete();

        $client = Clients::find($appointment->user_id);
        Mail::to($client->email)->send(new AppointmentRejectedMail($appointment));

        return response()->json(['message' => 'Appointment Rejected successfully.']);

    }

    public function adminShow()
    {
    // $clients = Clients::all();
    $appointment_approved= AppointmentApproved::orderByDesc('appointmentDate')->get();
    
    // Retrieve the rejected appointments and sort them by appointment date from the rejected table
    $appointment_rejected = AppointmentRejected::orderByDesc('appointmentDate')->get();

    // Retrieve all appointment records and sort them by appointment date from the appointment_details table
    $appointment_pending = AppointmentPending::orderByDesc('appointmentDate')->get();
    
    return view('admin/admin_appointment', compact( 'appointment_approved', 'appointment_rejected', 'appointment_pending'));
    }

    public function list()
    {
        $user = Auth::guard('clients')->id();        // Get the currently authenticated user
        $appointments = AppointmentPending::where('user_id', $user)->get();

    return view('user/appointmentlist', compact('appointments'));
    }

}
