<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AppointmentApproved;
use App\Models\Admin\MedInfo;
use App\Models\Admin\PetRecord;
use App\Models\Admin\VaxInfo;
use App\Models\Admin\VitInfo;
use App\Models\User\Clients;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ArchiveController extends Controller
{
    public function show(Request $request)
    {
        $med_exist = MedInfo::whereNotNull('archived_at')->exists();
        $vax_exist = VaxInfo::whereNotNull('archived_at')->exists();
        $vit_exist = VitInfo::whereNotNull('archived_at')->exists();
        $petrecord_exist = PetRecord::whereNotNull('archived_at')->exists();
        $appointment_exist = AppointmentApproved::whereNotNull('archived_at')->exists();
        $client_exist = Clients::whereNotNull('archived_at')->exists();
        $dataExist = $med_exist || $vax_exist || $vit_exist || $petrecord_exist || $appointment_exist || $client_exist;

        $search = $request->input('search');
        
        $med_info = MedInfo::whereNotNull('archived_at')
        ->where(function ($query) use ($search) {
            $query->where('item_name',  'LIKE', "%$search%")
            ->orWhere('source', 'LIKE', "%$search%"); })->get();

        $vax_info = VaxInfo::whereNotNull('archived_at')
        ->where(function ($query) use ($search) {
            $query->where('item_name', 'LIKE', "%$search%")
            ->orWhere('source', 'LIKE', "%$search%"); })->get();

        $vit_info = VitInfo::whereNotNull('archived_at')
        ->where(function ($query) use ($search) {
            $query->where('item_name', 'LIKE', "%$search%")
            ->orWhere('source', 'LIKE', "%$search%"); })->get();
            
        $petrecord = PetRecord::whereNotNull('archived_at')
        ->where(function ($query) use ($search) {
            $query->where('source', 'LIKE', "%$search%")
            ->orWhereHas('pet', function ($subQuery) use ($search) {
                $subQuery->where('name', 'LIKE', "%$search%"); });
            })->get();

        $appointment = AppointmentApproved::whereNotNull('archived_at')
        ->where(function ($query) use ($search) {
            $query->where('source', 'LIKE', "%$search%")
            ->orWhereHas('clients', function ($subQuery) use ($search){
                $subQuery->where('first_name', 'LIKE', "%$search%")->orWhere('middle_name', 'LIKE', "%$search%")
                ->orWhere('last_name', 'LIKE', "%$search%")->orWhere('suffix', 'LIKE', "%$search%"); });
            })->get();

        $client = Clients::whereNotNull('archived_at')
        ->where(function ($query) use ($search){
            $query->where('first_name', 'LIKE', "%$search%")->orWhere('middle_name', 'LIKE', "%$search%")
            ->orWhere('last_name', 'LIKE', "%$search%")->orWhere('suffix', 'LIKE', "%$search%"); 
        })->get();

        $archived = $vax_info->concat($med_info)->concat($vit_info)->concat($petrecord)->concat($appointment)->concat($client);

        $sortItem = $request->input('sortItems');
        $sortOrder = $request->input('sortOrder');
        $sortField = [
            0 => 'item_name',
            1 => 'source',
            2 => 'created_at',
            3 => 'archived_at',
        ][$sortItem] ?? 'item_name';
        $sortDirection = $sortOrder == 1 ? 'desc' : 'asc';
        $archived = $archived->sortBy($sortField, SORT_NATURAL, $sortOrder == 1);

        // $archived = $archived->sortBy(function ($item) use ($sortField, $sortOrder) {
        //     // If $sortField is an array, iterate over its elements
        //     if (is_array($sortField)) {
        //         foreach ($sortField as $field) {
        //             // Perform sorting based on each field
        //             $archived = $item->$field ?? null;
        //         }
        //     } else {
        //         // If $sortField is a single value, use it directly
        //         $archived = $item->$sortField ?? null;
        //     }
        
        //     // Return the final value for sorting
        //     return $archived;
        // }, SORT_NATURAL, $sortOrder == 1);
        return view('admin/archive', compact('dataExist', 'archived', 'petrecord', 'appointment', 'client'));
    }
    public function search(Request $request)
    {

    }

    public function unarchived(Request $request, $product_type, $id)
    {
        switch ($product_type) {
            case 'Medicine':
                $med_info = MedInfo::find($id);
                $med_info->update(['archived_at' => null]);
                $med_info->medBatch()->update(['archived_at' => null]);
                break;
            case 'Vaccine':
                $vax_info = VaxInfo::find($id);
                $vax_info->update(['archived_at' => null]);
                $vax_info->vaxBatch()->update(['archived_at' => null]);
                break;
            case 'Vitamin':
                $vit_info = VitInfo::find($id);
                $vit_info->update(['archived_at' => null]);
                $vit_info->vitBatch()->update(['archived_at' => null]);
                break;            // Add more cases as needed for other tables
            default:
                return null;
        }
        return redirect()->back()->with('success', 'Unarchive');
    }
    public function unarchiveMed(Request $request, $id)
    {
        $med_info = MedInfo::find($id);
        $med_info->update(['archived_at' => null]);
        $med_info->medBatch()->update(['archived_at' => null]);

        return redirect()->back()->with('success', 'Unarchive');
    }

    public function unarchiveVax(Request $request, $id)
    {
        $vax_info = VaxInfo::find($id);
        $vax_info->update(['archived_at' => null]);
        $vax_info->vaxBatch()->update(['archived_at' => null]);

        return redirect()->back()->with('success', 'Unarchive');
    }

    public function unarchiveVit(Request $request, $id)
    {
        $vit_info = VitInfo::find($id);
        $vit_info->update(['archived_at' => null]);
        $vit_info->vitBatch()->update(['archived_at' => null]);

        return redirect()->back()->with('success', 'Unarchive');
    }
    public function unarchivePetRec(Request $request, $id)
    {
        $petrecord = PetRecord::find($id);
        $petrecord->update(['archived_at' => null]);

        return redirect()->back()->with('success', 'Unarchive');
    }
    public function unarchiveAppointment(Request $request, $id)
    {
        $appointment = AppointmentApproved::find($id);
        $appointment->update(['archived_at' => null]);

        return redirect()->back()->with('success', 'Unarchive');
    }
    public function unarchiveClient(Request $request, $id)
    {
        $client = Clients::find($id);
        $client->update(['archived_at' => null]);

        return redirect()->back()->with('success', 'Unarchive');
    }

}
