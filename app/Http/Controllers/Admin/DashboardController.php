<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AppointmentApproved;
use App\Models\Admin\PetInfo;
use App\Models\User\Clients;
use Illuminate\Http\Request;

use App\Models\Admin\MedBatch;
use App\Models\Admin\VitInfo;
use App\Models\Admin\MedInfo;
use App\Models\Admin\VaxBatch;
use App\Models\Admin\VaxInfo;
use App\Models\Admin\VitBatch;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class DashboardController extends Controller
{
    public function show()
    {
        $appointment_approved = AppointmentApproved::with('clients');
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        $sortField = 'STR_TO_DATE(appointmentDate, "%W, %M %d, %Y")';
        $sortDirection = 'desc';

        $appointment_approved->orderByRaw($sortField . ' ' . $sortDirection);
        $appointment_approved = $appointment_approved->paginate(5);
        $appointment_approved->withPath('/admin/dashboard');
     
        $products = null;
        $med = MedInfo::leftJoin('med_batch', function ($join) {
            $join->on('med_info.id', '=', 'med_batch.med_id')
                ->whereNull('med_info.archived_at')
                ->whereRaw('med_batch.id = (SELECT id FROM med_batch WHERE med_id = med_info.id AND archived_at IS NULL ORDER BY expiration_date ASC LIMIT 1)');
        })
        ->select('med_info.*', 'med_batch.expiration_date', 'med_batch.date_stocked','med_info.quantity as info_quantity')
        ->whereNull('med_info.archived_at');
        $queries[] = $med;


        $vax = VaxInfo::leftJoin('vax_batch', function ($join) {
            $join->on('vax_info.id', '=', 'vax_batch.vax_id')
                ->whereNull('vax_batch.archived_at')
                ->whereRaw('vax_batch.id = (SELECT id FROM vax_batch WHERE vax_id = vax_info.id AND archived_at IS NULL ORDER BY expiration_date ASC LIMIT 1)');
        })
        ->select('vax_info.*', 'vax_batch.expiration_date', 'vax_batch.date_stocked','vax_info.quantity as info_quantity')
        ->whereNull('vax_info.archived_at');
        $queries[] = $vax;
        $vit = VitInfo::leftJoin('vit_batch', function ($join) {
            $join->on('vit_info.id', '=', 'vit_batch.vit_id')
                ->whereNull('vit_batch.archived_at')
                ->whereRaw('vit_batch.id = (SELECT id FROM vit_batch WHERE vit_id = vit_info.id AND archived_at IS NULL ORDER BY expiration_date ASC LIMIT 1)');
        })
        ->select('vit_info.*', 'vit_batch.expiration_date', 'vit_batch.date_stocked','vit_info.quantity as info_quantity')
        ->whereNull('vit_info.archived_at');
        $queries[] = $vit;
        if (!empty($queries)) {
            $products = array_shift($queries); // Get the first query
            foreach ($queries as $query) {
                $products = $products->union($query);
            }
        }
        
        $sortField = 'item_name';
        $products = $products->orderBy($sortField, 'asc')->get();
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $products->slice(($currentPage - 1) * 5, 5)->all();
        $products = new LengthAwarePaginator($currentPageItems, $products->count(), 5);
        $products->withPath('/admin/dashboard');
 
        // PAGINATION
            



        // $completedAppoitments = AppointmentApproved::where('status', 'completed')->count();
        // $staffCount = Staff::count();
        $clients = Clients::count();
        $clientsWithAppointments = Clients::whereHas('appointmentApproved')->count();
        $appointmentCount = AppointmentApproved::whereNull('archived_at')->count();
        $presentDate = now()->format('l, F j, Y');
        $query = AppointmentApproved::whereNull('archived_at')->where('appointmentDate', 'LIKE', '%' . $presentDate . '%');
        $upcomingAppointment = $query->count();
        $pets = PetInfo::count();

        return view('admin/dashboard', compact('appointment_approved', 'clients', 'appointmentCount', 'pets','products', 'upcomingAppointment', 'clientsWithAppointments'));
    }

    public function store(Request $request)
    {
        $email = $request->input('email');
        $phone = $request->input('phone');
        $first_name = $request->input('first_name');
        $middle_name = $request->input('middle_name');
        $suffix = $request->input('suffix');
        $last_name = $request->input('last_name');
        $birthdate = $request->input('birthdate');
        $request->validate([
            // Add any validation rules you need
            'suffix' => 'nullable',
            'specify_suffix' => 'required_if:suffix,Other',
        ]);
        $suffix = $request->input('suffix');
        $specifySuffix = $request->input('specify_suffix');

        // Create a new client
        $clients = new Clients();
        $clients->first_name = $first_name;
        $clients->middle_name = $middle_name;
        $clients->last_name = $last_name;
        $clients->birthdate = $birthdate;
        $clients->email = $email;
        $clients->phone = $phone;
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
