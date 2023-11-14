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

        $productInfo = $vax_info->union($med_info)->union($vit_info);

        return view('admin/inventory', compact('productInfo', 'vax_info', 'med_info', 'vit_info', 'med_batch', 'vax_batch', 'vit_batch'));
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

    public function editProduct($product_type, $id)
    {
        switch ($product_type) {
            case 'medicine':
                $productInfo = MedInfo::find($id);
                break;
            case 'vaccine':
                $productInfo = VaxInfo::find($id);
                break;
            case 'vitamin':
                $productInfo = VitInfo::find($id);
                break;
            default:
                // Handle invalid product type, e.g., return an error response.
                return response()->json(['error' => 'Invalid product type']);
        }
        return view('admin/inventory', compact('productInfo'));
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
                break;
            case 'Vitamin':
                $product = VitBatch::find($id);
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

    public function addStockMed(Request $request, $id)
    {
        // Validate the request data


        // Find the record by ID and update the quantity
        $med_info = MedInfo::findOrFail($id);
        $med_info->quantity = $request->input('newQuantity');
        $med_info->save();
        
        return redirect()->back()->with('success', 'Product quantity updated successfully');
    }

}
    //    $productType = $request->input('product_type');
    //     // Depending on the product_type, create and store data in the respective table
    //     switch ($productType) {
    //         case 'Medicine':
    //             $med_info = new MedInfo;
    //             $med_info->item_name = $request->input('item_name');
    //             $med_info->quantity = $request->input('quantity');
    //             $med_info->price = $request->input('price');
    //             $med_info->product_code = $request->input('product_code');
    //             $med_info->date_stocked = $request->input('date_stocked');
    //             $med_info->expiration_date = $request->input('expiration_date');
    //             $med_info->manufacturing_date = $request->input('manufacturing_date');
    //             $med_info->batch_no = $request->input('batch_no');
    //             $med_info->product_type = $productType;
    //             $med_info->save();
    //             break;
    //         case 'Vitamin':
    //             $vit_info = new VitInfo;
    //             $vit_info->item_name = $request->input('item_name');
    //             $vit_info->quantity = $request->input('quantity');
    //             $vit_info->price = $request->input('price');
    //             $vit_info->product_code = $request->input('product_code');
    //             $vit_info->date_stocked = $request->input('date_stocked');
    //             $vit_info->expiration_date = $request->input('expiration_date');
    //             $vit_info->manufacturing_date = $request->input('manufacturing_date');
    //             $vit_info->batch_no = $request->input('batch_no');
    //             $vit_info->product_type = $productType;
    //             $vit_info->save();
    //             break;
    //         case 'Vaccine':
    //             $vax_info = new VaxInfo;
    //             $vax_info->item_name = $request->input('item_name');
    //             $vax_info->quantity = $request->input('quantity');
    //             $vax_info->price = $request->input('price');
    //             $vax_info->product_code = $request->input('product_code');
    //             $vax_info->date_stocked = $request->input('date_stocked');
    //             $vax_info->expiration_date = $request->input('expiration_date');
    //             $vax_info->manufacturing_date = $request->input('manufacturing_date');
    //             $vax_info->batch_no = $request->input('batch_no');
    //             $vax_info->product_type = $productType;
    //             $vax_info->save();
    //             break;
    //     }