<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\AppointmentPending;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\AppointmentApproved;
use App\Models\Admin\AppointmentRejected;

class AppointmentController extends Controller
{
    public function showForm()
    {
        return view('user/appointment');
    }

    public function store(Request $request)
    {
    // Get the currently authenticated user
    $userID = Auth::guard('client')->id();

    // Form submission logic
    // Retrieve form data
    $petType = $request->input('petType');
    $breed = $request->input('breed');
    $appointmentType = $request->input('service');
    $appointmentDate = \DateTime::createFromFormat('F j, Y', $request->input('appointmentDate'))->format('Y-m-d');
    $appointmentTime = \DateTime::createFromFormat('h:i A', $request->input('appointmentTime'))->format('H:i:s');

    // Store the form data in the appointments table
    $appointment_pending = new AppointmentPending();
    $appointment_pending->user_id = $userID;
    $appointment_pending->petType = $petType;
    $appointment_pending->breed = $breed;
    $appointment_pending->appointmentType = $appointmentType;
    $appointment_pending->appointmentDate = $appointmentDate;
    $appointment_pending->appointmentTime = $appointmentTime;

    // Associate the appointment with the authenticated user

    $appointment_pending->save();
    //return response()->json(['message' => 'Data received successfully']);
    // Redirect to a success page or perform other actions as needed
    return redirect()->route('appointment_list');
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
        
    }

    public function reject($id)
    {
        $appointment_pending = AppointmentPending::findOrFail($id);

        // Move the data to the "rejected" table
        AppointmentRejected::create([
            'user_id' => $appointment_pending->user_id,
            'petType' => $appointment_pending->petType,
            'breed' => $appointment_pending->breed,
            'appointmentType' => $appointment_pending->appointmentType,
            'appointmentDate' => $appointment_pending->appointmentDate,
            'appointmentTime' => $appointment_pending->appointmentTime,
        ]);
        $appointment_pending->status = 'rejected';
        // Delete the data from the "appointment_details" table
        $appointment_pending->delete();

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
