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


use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use ErlandMuchasaj\Sanitize\Sanitize;

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
    // $validatedData = $request->validate([
    //     'petType.*' => 'required',
    //     'breed.*' => 'required',
    //     'appointmentType.*' => 'required',
    // ]);

    // // Store the form data in the appointments table
    // $count = count($validatedData['breed']);

    // // Assume the date and time are set once for all pets
    // $appointmentDate = $request->input('appointmentDate');
    // $appointmentTime = $request->input('appointmentTime');

    // for ($i = 0; $i < $count; $i++) {
    //     // Check if the key exists before accessing it
    //     if (isset($validatedData['breed'][$i])) {
    //         AppointmentPending::create([
    //             'user_id' => $clientId,
    //             'petType' => $validatedData['petType'][$i],
    //             'breed' => $validatedData['breed'][$i],
    //             'appointmentType' => $validatedData['appointmentType'][$i],
    //             'appointmentDate' => $appointmentDate,
    //             'appointmentTime' => $appointmentTime,
    //         ]);
    //     }
    // }
    $count = $request->input('count');
    $validatedData = $request->validate([
        'petName' => 'required',
        'petType' => 'required',
        'breed' => 'required',
        'appointmentType' => 'required',
        'notes' => 'nullable',
        'petName1' => 'nullable',
        'petType1'=> 'nullable',
        'breed1' => 'nullable',
        'appointmentType1' => 'nullable',
        'notes1' => 'nullable',
        'petName2' => 'nullable',
        'petType2' => 'nullable',
        'breed2' => 'nullable',
        'appointmentType2' => 'nullable',
        'notes2' => 'nullable',
    ]);
    $appointmentDate = $request->input('appointmentDate');
    $appointmentTime = $request->input('appointmentTime');
    $existingAppointments = AppointmentPending::where('user_id', $clientId)
        ->whereDate('appointmentDate', $appointmentDate)
        ->get();
    if ($existingAppointments->count() >= 3) {
        return redirect()->back()->with('error', 'You have reached the maximum limit of appointments for today.');
    }
    AppointmentPending::create([
        'user_id' => $clientId,
        'petName' => $validatedData['petName'],
        'petType' => $validatedData['petType'],
        'breed' => $validatedData['breed'],
        'appointmentType' => $validatedData['appointmentType'],
        'notes' => $validatedData['notes'],
        'appointmentDate' => $appointmentDate,
        'appointmentTime' => $appointmentTime,
    ]);

    if($count == 2 ){
        AppointmentPending::create([
            'user_id' => $clientId,
            'petName' => $validatedData['petName1'],
            'petType' => $validatedData['petType1'],
            'breed' => $validatedData['breed1'],
            'appointmentType' => $validatedData['appointmentType1'],
            'notes' => $validatedData['notes1'],
            'appointmentDate' => $appointmentDate,
            'appointmentTime' => $appointmentTime,
        ]);
    }
    if($count == 3){
        AppointmentPending::create([
            'user_id' => $clientId,
            'petName' => $validatedData['petName1'],
            'petType' => $validatedData['petType1'],
            'breed' => $validatedData['breed1'],
            'appointmentType' => $validatedData['appointmentType1'],
            'notes' => $validatedData['notes1'],
            'appointmentDate' => $appointmentDate,
            'appointmentTime' => $appointmentTime,
        ]);
        AppointmentPending::create([
            'user_id' => $clientId,
            'petName' => $validatedData['petName2'],
            'petType' => $validatedData['petType2'],
            'breed' => $validatedData['breed2'],
            'appointmentType' => $validatedData['appointmentType2'],
            'notes' => $validatedData['notes2'],
            'appointmentDate' => $appointmentDate,
            'appointmentTime' => $appointmentTime,
        ]);
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
        
        //$client = Clients::find($appointment->user_id);
        // Mail::to($client->email)->send(new AppointmentApprovedMail($appointment));
        return response()->json(['message' => 'Appointment Approved successfully.']);

    }

    public function reject(Request $request, $id)
    {
        $appointment = AppointmentPending::findOrFail($id);
        $reason =$request->input('reason');
        $otherReason = $request->input('otherReason');

        AppointmentRejected::create([
            'user_id' =>$appointment->user_id,
            'petType' => $appointment->petType,
            'breed' => $appointment->breed,
            'appointmentType' => $appointment->appointmentType,
            'appointmentDate' => $appointment->appointmentDate,
            'appointmentTime' => $appointment->appointmentTime,
            'notes' => ($reason === 'other' && $otherReason) ? $otherReason : $reason,
        ]);
        // Delete the data from the "appointment_details" table
        $appointment->delete();

        //$client = Clients::find($appointment->user_id);
        //Mail::to($client->email)->send(new AppointmentRejectedMail($appointment));

        return response()->json(['message' => 'Appointment Rejected successfully.']);

    }

    public function resched(Request $request, $id)
    {
        $appointment = AppointmentRejected::findOrFail($id);
        AppointmentPending::create([
            'user_id' =>$appointment->user_id,
            'petType' => $appointment->petType,
            'breed' => $appointment->breed,
            'appointmentType' => $appointment->appointmentType,
            'appointmentDate' => $request->input('appointmentDate'),
            'appointmentTime' => $request->input('appointmentTime'),
        ]);
        $appointment->delete();
        return response()->json(['message' => 'Appointment successfully rescheduled.']);
    }

    public function adminShow(Request $request)
    {
        $query = $request->input('qApproved');
        $perPage = $request->input('perPage');
        $sortItem = $request->input('sortItems');
        $sortOrder = $request->input('sortOrder');

        $pendingQuery = $request->input('qPending');
        $rejectQuery = $request->input('qReject');
       
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $appointment_approved = AppointmentApproved::with('clients')->whereNull('appointment_approved.archived_at')->join('clients', 'appointment_approved.user_id', '=', 'clients.id');
        $appointment_pending = AppointmentPending::with('clients')->join('clients', 'appointment_pending.user_id', '=', 'clients.id')
        ->select('appointment_pending.id as appointment_id', 'clients.id as client_id', 'clients.*', 'appointment_pending.*');
        $appointment_rejected = AppointmentRejected::with('clients')->join('clients', 'appointment_rejected.user_id', '=', 'clients.id');

        if($query){
            $appointment_approved->search($query);
        }
 
        $appointment_approved->petType($request);
        $appointment_approved->status($request);

        if($pendingQuery){
            $appointment_pending->search($pendingQuery);
        }
        $appointment_pending->petType($request);

        if($rejectQuery){
            $appointment_rejected->search($rejectQuery);
        }
        $appointment_rejected->petType($request);

        $sortField = [
            0 => 'STR_TO_DATE(appointmentDate, "%W, %M %d, %Y")',  // Assuming the format is "Weekday, Month Day, Year"
            1 => 'status',
            2 => 'petType',
            3 => 'clients.first_name',
            4 => 'appointmentType',
        ][$sortItem] ?? 'STR_TO_DATE(appointmentDate, "%W, %M %d, %Y")';
        
        
        
        
        $sortDirection = $sortOrder === null ? 'desc' : ($sortOrder == 1 ? 'desc' : 'asc');
        
        $appointment_approved->orderByRaw($sortField . ' ' . $sortDirection);
        $appointment_pending->orderByRaw($sortField . ' ' . $sortDirection);
        $appointment_rejected->orderByRaw($sortField . ' ' . $sortDirection);
        


        $perPage = filter_var($perPage, FILTER_VALIDATE_INT);
        if ($perPage === false || $perPage < 5) {
            $perPage = 5; 
        }
        $appointment_approved = $appointment_approved->paginate($perPage, ['*'], 'approvedPage');
        $appointment_approved->withPath('/admin/appointment');

        $appointment_pending = $appointment_pending->paginate($perPage,['*'], 'pendingPage');
        $appointment_pending->withPath('/admin/appointment');

        $appointment_rejected = $appointment_rejected->paginate($perPage,['*'], 'rejectPage');
        $appointment_rejected->withPath('/admin/appointment');

        $approvedExist = $appointment_approved->isNotEmpty();
        $rejectedExist = $appointment_rejected->isNotEmpty();
        $pendingExist = $appointment_pending->isNotEmpty();

        $approvedCount = AppointmentApproved::whereNull('archived_at')->count();
        $pendingCount = AppointmentPending::count();
        $rejectedCount = AppointmentRejected::count();
                
        return view('admin/admin_appointment', compact( 'appointment_approved', 'appointment_rejected', 'appointment_pending', 
        'approvedExist', 'pendingExist', 'rejectedExist', 'approvedCount', 'pendingCount', 'rejectedCount'));
    }

    public function list()
    {
        $clientId = Auth::guard('clients')->id();
        $clientInfo = Clients::find($clientId);     // Get the currently authenticated user
        $appointments = AppointmentPending::where('user_id', $clientId)->get();
        $appointmentapproved = AppointmentApproved::where('user_id', $clientId)->get();
        return view('user/appointmentlist', compact('appointments', 'appointmentapproved',  'clientInfo'));
    }

    public function markAsComplete($id)
    {
        $appointment = AppointmentApproved::findOrFail($id);
        $appointment->update(['completed_at' => now(), 'status' => 'Completed']);
        return redirect()->back()->with('success', 'Appointment marked as completed.');
    }

    public function archive($id)
    {
        $appointment = AppointmentApproved::find($id);
        $appointment->update(['archived_at' => now()]);
        return redirect()->back()->with('success', 'Appointment archived.');
    }

}
