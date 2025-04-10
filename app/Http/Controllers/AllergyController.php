<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\EMRvax;
use App\Models\Admin\Allergy;
use App\Models\Admin\Condition;
use App\Models\Admin\OwnerInfo;
use App\Models\Admin\PetInfo;
class AllergyController extends Controller
{
    public function show()
    {
        return view('petrecord');
    }

    public function allergySave(Request $request)
    {
        $allergy = new Allergy();
        $allergy->allergy_name = $request->input('allergies');
        $allergy->reaction = $request->input('reaction');
        $allergy->severity = $request->input('severity');
        $allergy->save();

        return redirect()->back();
    }
}
