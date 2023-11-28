<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\MedBatch;
use App\Models\Admin\VitInfo;
use App\Models\Admin\MedInfo;
use App\Models\Admin\VaxBatch;
use App\Models\Admin\VaxInfo;
use App\Models\Admin\VitBatch;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Foundation\Vite;

class InvController extends Controller
{
    public function show()
    {
        $vax_info = VaxInfo::all();
        $med_info = MedInfo::all();
        $vit_info = VitInfo::all();
        $med_batch = MedBatch::all();
        $vax_batch = VaxBatch::all();
        $vit_batch = VitBatch::all();

        $med_info = MedInfo::with('MedBatch')->orderBy('created_at', 'asc')->get();
        $vax_info = VaxInfo::with('VaxBatch')->orderBy('created_at', 'asc')->get();
        $vit_info = VitInfo::with('VitBatch')->orderBy('created_at', 'asc')->get();

        $productInfo = $vax_info->concat($med_info)->concat($vit_info);
        $productBatch = $med_batch->concat($vax_batch)->concat($vit_batch);
        $dataExists = !$productInfo->isEmpty() || !$med_batch->isEmpty() || !$vax_batch->isEmpty() || !$vit_batch->isEmpty();

        return view('admin/inventory', compact('dataExists','productBatch','productInfo', 'vax_info', 'med_info', 'vit_info', 'med_batch', 'vax_batch', 'vit_batch'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->all();

        $productType = $request->input('product_type');
    
        // Use a switch statement to handle different product types
        switch ($productType) {
            case 'Medicine':
                $medInfo = new MedInfo($validatedData);
                $medInfo->save();
    
                $medBatchData = [
                    'batch_no' => $validatedData['batch_no'],
                    'product_code' => $validatedData['product_code'],
                    'manufacturing_date' => $validatedData['manufacturing_date'],
                    'expiration_date' => $validatedData['expiration_date'],
                    'date_stocked' => $validatedData['date_stocked'],
                ];
    
                $medBatch = new MedBatch($medBatchData);
                $medInfo->medBatch()->save($medBatch);
    
                break;
    
            case 'Vaccine':
                // Handle Vitamin data and save to VitInfo and VitBatch tables
                $vaxInfo = new VaxInfo($validatedData);
                $vaxInfo->save();

                $vaxBatchData = [
                    'batch_no' => $validatedData['batch_no'],
                    'product_code' => $validatedData['product_code'],
                    'manufacturing_date' => $validatedData['manufacturing_date'],
                    'expiration_date' => $validatedData['expiration_date'],
                    'date_stocked' => $validatedData['date_stocked']
                ];

                $vaxBatch = new VaxBatch($vaxBatchData);
                $vaxInfo->vaxBatch()->save($vaxBatch);

                break;
    
            case 'Vitamin':
                // Handle Vaccine data and save to VaxInfo and VaxBatch tables
                $vitInfo = new VitInfo($validatedData);
                $vitInfo->save();

                $vitBatchData = [
                    'batch_no' => $validatedData['batch_no'],
                    'product_code' => $validatedData['product_code'],
                    'manufacturing_date' => $validatedData['manufacturing_date'],
                    'expiration_date' => $validatedData['expiration_date'],
                    'date_stocked' => $validatedData['date_stocked']
                ];

                $vitBatch = new VitBatch($vitBatchData);
                $vitInfo->vitBatch()->save($vitBatch);

                break;
            default:
                // Handle the default case (if necessary)
                break;
        }
         return redirect()->back();
    }

    public function viewProduct($product_type, $id)
    {
        switch( $product_type) {
            case 'Medicine':
                $productInfo = MedInfo::findOrFail($id);
                $productBatch = MedBatch::find($id);
                break;
            case 'Vaccine':
                $productInfo = VaxInfo::find($id);
                $productBatch =VaxBatch::find($id);
                break;
            case 'Vitamin':
                $productInfo = VitInfo::find($id);
                $productBatch = VitBatch::find($id);
                break;
            default:
             return response()->json(['error' => 'Invalid Product Type']);
        }
        return response()->json([
            'productInfo' => $productInfo,
            'productBatch' => $productBatch,
        ]);    
    }

    public function updateProduct(Request $request, $product_type, $id)
    {
        // Depending on the product_type, create and store data in the respective table
        switch ($product_type) {
            case 'Medicine':
                $product = MedBatch::find($id);
                $quantity = MedInfo::find($id);
                break;
            case 'Vaccine':
                $product = VaxBatch::find($id);
                $quantity = VaxInfo::find($id);
                break;
            case 'Vitamin':
                $product = VitBatch::find($id);
                $quantity = VitInfo::find($id);
                break;
            default:
                // Handle the case where the product type is not recognized, e.g., show an error or redirect
                break;
        }
        // Update the record
        $product->product_code = $request->input('product_code');
        $product->date_stocked = $request->input('date_stocked');
        $product->expiration_date = $request->input('expiration_date');
        $product->manufacturing_date = $request->input('manufacturing_date');
        $product->batch_no = $request->input('batch_no');
        $product->save();
        $quantity->quantity = $request->input('quantity');
        $quantity->save();


        // Redirect to a page after successful update
        return redirect()->route('admin_inv');
    }

    public function addStock(Request $request, $product_type, $id)
    {
        switch ($product_type) {
            case 'Medicine':
                $product = MedBatch::find($id);
                $med_batch = new MedBatch([
                'batch_no' => $request->input('batch_no'),
                'product_code' => $request->input('product_code'),
                'manufacturing_date' => $request->input('manufacturing'),
                'expiration_date' => $request->input('expiration_date'),
                'date_stocked' => $request->input('date_stocked'),
                ]);
                $product->medBatch()->save($med_batch);
                
                $med_info = MedInfo::find($id);
                $med_info->quantity += $request->input('quantity');
                $med_info->save();
                break;
            case 'Vaccine':
                $product = VaxBatch::find($id);
                $vax_batch = new VaxBatch([
                    'batch_no' => $request->input('batch_no'),
                    'product_code' => $request->input('product_code'),
                    'manufacturing_date' => $request->input('manufacturing'),
                    'expiration_date' => $request->input('expiration_date'),
                    'date_stocked' => $request->input('date_stocked'),
                    ]);
                $product->vaxBatch()->save($vax_batch);
                $med_info = MedInfo::find($id);
                $med_info->quantity += $request->input('quantity');
                break;
            case 'Vitamin':
                $product = VitBatch::find($id);
                $vit_batch = new VitBatch([
                    'batch_no' => $request->input('batch_no'),
                    'product_code' => $request->input('product_code'),
                    'manufacturing_date' => $request->input('manufacturing'),
                    'expiration_date' => $request->input('expiration_date'),
                    'date_stocked' => $request->input('date_stocked'),
                    ]);
                $product->vitBatch()->save($vit_batch);
                break;
            default:
                // Handle the case where the product type is not recognized, e.g., show an error or redirect
                break;
        }

        
        return redirect()->back()->with('success', 'Product quantity updated successfully');
    }

}
   