<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\MedInfo;
use App\Models\Admin\VaxInfo;
use App\Models\Admin\VitInfo;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function show()
    {
        $med_exist = MedInfo::whereNotNull('archived_at')->exists();
        $vax_exist = VaxInfo::whereNotNull('archived_at')->exists();
        $vit_exist = VitInfo::whereNotNull('archived_at')->exists();
        $dataExist = $med_exist || $vax_exist || $vit_exist;

        $med_info = MedInfo::whereNotNull('archived_at')->get();
        $vax_info = VaxInfo::whereNotNull('archived_at')->get();
        $vit_info = VitInfo::whereNotNull('archived_at')->get();

        $productInfo = $vax_info->concat($med_info)->concat($vit_info);

        return view('admin/archive', compact('dataExist', 'productInfo'));
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
    }
}
