<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\MedBatch;
use App\Models\Admin\MedInfo;
use App\Models\Admin\PetRecord;
use App\Models\Admin\VaxBatch;
use App\Models\Admin\VaxInfo;
use App\Models\Admin\VitBatch;
use App\Models\Admin\VitInfo;
use App\Models\User\Clients;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;

class ReportController extends Controller
{
    public function invPDF()
    {
        $medInfo = MedInfo::with('MedBatch')->get();
        $vaxInfo = VaxInfo::with('VaxBatch')->get();
        $vitInfo = VitInfo::with('VitBatch')->get();


        $data = [
            'title' => 'Inventory Report',
            'medInfo' => $medInfo,
            'vaxInfo' => $vaxInfo,
            'vitInfo' => $vitInfo,
        ];

        // Load view for PDF
        $pdf = PDF::loadView('pdf.inventory_reports', $data);

        // Download the PDF file
        return $pdf->download('Inventory_Reports.pdf');
    }
    public function clientPDF()
    {
        $clientInfo = Clients::all();

        $data = [
            'title' => 'List of Client',
            'clientInfo' => $clientInfo,
        ];

        $pdf = PDF::loadView('pdf.list_clients', $data);

        return $pdf->download('Client_List.pdf');
    }
    public function petrecordPDF()
    {
        $petrecord = PetRecord::all();

        $data = [
            'title' => 'Pet Records',
            'petrecord' => $petrecord
        ];

        $pdf = PDF::loadView('pdf.petrecord_reports', $data);

        return $pdf->download('Pet_Records.pdf');
    }
}
