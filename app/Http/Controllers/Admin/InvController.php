<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\VitInfo;
use App\Models\Admin\MedInfo;
use App\Models\Admin\VaxInfo;
use Illuminate\Foundation\Vite;

class InvController extends Controller
{
    public function save(Request $request)
    {
    $item_name = $request->input('item_name');
    $quantity = $request->input('quantity');
    $price = $request->input('price');
    $product_code = $request->input('product_code');
    $date_stocked = $request->input('date_stocked');
    $manufacturing_date = $request->input('manufacturing_date');
    $batch_no = $request->input('batch_no');
    $product_type = $request->input('product_type');

    // Validation logic for common input fields
    $validatedData = $request->validate([
        'item_name' => 'required|string',
        'quantity' => 'required|integer',
        'price' => 'required|numeric',
        'product_code' => 'required|numeric',
        'date_stocked' => 'required|date',
        'manufacturing_date' => 'required|date',
        'batch_no' => 'required|numeric',
        'product_type' => 'required|in:vaccine,medicine,vitamin',
    ]);

    // Determine the product type selected
    $productType = $validatedData['product_type'];

    // Validate and process the fields specific to each product type
    switch ($productType) {
        case 'vaccine':
            $vaccineData = $request->validate([
                'effects' => 'required|string',
                'vax_exp' => 'required|date',
            ]);

            VaxInfo::create(array_merge($validatedData, $vaccineData));
            break;

        case 'medicine':
            $medicineData = $request->validate([
                'uses' => 'required|string',
                'side_effects' => 'required|string',
                'med_exp' => 'required|date',
            ]);

            MedInfo::create(array_merge($validatedData, $medicineData));
            break;

        case 'vitamin':
            $vitData = $request->validate([
                'vit_exp' => 'required|date',
            ]);

            VitInfo::create(array_merge($validatedData, $vitData));
            break;

        default:
            // Handle invalid product type (optional)
            break;
    }

    // Redirect or return a response indicating success
    return redirect()->view('/inventory');

    }

    public function show()
    {
        $vax_info = VaxInfo::all();
        $med_info = MedInfo::all();
        $vit_info = VitInfo::all();

        $productInfo = $vax_info->union($med_info)->union($vit_info);

        return view('admin/inventory', compact('productInfo', 'vax_info', 'med_info', 'vit_info'));
    }

    public function store(Request $request)
    {
       $productType = $request->input('product_type');
        // Depending on the product_type, create and store data in the respective table
        switch ($productType) {
            case 'Medicine':
                $med_info = new MedInfo;
                $med_info->item_name = $request->input('item_name');
                $med_info->quantity = $request->input('quantity');
                $med_info->price = $request->input('price');
                $med_info->product_code = $request->input('product_code');
                $med_info->date_stocked = $request->input('date_stocked');
                $med_info->expiration_date = $request->input('expiration_date');
                $med_info->manufacturing_date = $request->input('manufacturing_date');
                $med_info->batch_no = $request->input('batch_no');
                $med_info->product_type = $productType;
                $med_info->save();
                break;
            case 'Vitamin':
                $vit_info = new VitInfo;
                $vit_info->item_name = $request->input('item_name');
                $vit_info->quantity = $request->input('quantity');
                $vit_info->price = $request->input('price');
                $vit_info->product_code = $request->input('product_code');
                $vit_info->date_stocked = $request->input('date_stocked');
                $vit_info->expiration_date = $request->input('expiration_date');
                $vit_info->manufacturing_date = $request->input('manufacturing_date');
                $vit_info->batch_no = $request->input('batch_no');
                $vit_info->product_type = $productType;
                $vit_info->save();
                break;
            case 'Vaccine':
                $vax_info = new VaxInfo;
                $vax_info->item_name = $request->input('item_name');
                $vax_info->quantity = $request->input('quantity');
                $vax_info->price = $request->input('price');
                $vax_info->product_code = $request->input('product_code');
                $vax_info->date_stocked = $request->input('date_stocked');
                $vax_info->expiration_date = $request->input('expiration_date');
                $vax_info->manufacturing_date = $request->input('manufacturing_date');
                $vax_info->batch_no = $request->input('batch_no');
                $vax_info->product_type = $productType;
                $vax_info->save();
                break;
        }
        return redirect()->back();
    }

    public function viewProduct($product_type, $id)
    {
        switch( $product_type) {
            case 'Medicine':
                $productInfo = MedInfo::find($id);
                break;
            case 'Vaccine':
                $productInfo = VaxInfo::find($id);
                break;
            case 'Vitamin':
                $productInfo = VitInfo::find($id);
                break;
            default:
             return response()->json(['error' => 'Invalid Product Type']);
        }
        return response()->json($productInfo);
    }

    public function editProduct($product_type, $id)
    {
        switch ($product_type) {
            case 'medicine':
                $medInfo = MedInfo::find($id);
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
                $product = MedInfo::find($id);
                break;
            case 'Vitamin':
                $product = VitInfo::find($id);
                break;
            case 'Vaccine':
                $product = VaxInfo::find($id);
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