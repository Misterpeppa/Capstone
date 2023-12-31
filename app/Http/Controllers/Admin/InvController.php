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
use Carbon\Carbon;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Foundation\Vite;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;


class InvController extends Controller
{
    // public function show()
    // {
    //     $vax_info = VaxInfo::all();
    //     $med_info = MedInfo::all();
    //     $vit_info = VitInfo::all();
    //     $med_batch = MedBatch::all();
    //     $vax_batch = VaxBatch::all();
    //     $vit_batch = VitBatch::all();

    //     $med_info = MedInfo::with('MedBatch')->orderBy('created_at', 'asc')->get();
    //     $vax_info = VaxInfo::with('VaxBatch')->orderBy('created_at', 'asc')->get();
    //     $vit_info = VitInfo::with('VitBatch')->orderBy('created_at', 'asc')->get();
    //     $productInfo = $vax_info->concat($med_info)->concat($vit_info);

       
        // $currentPage = LengthAwarePaginator::resolveCurrentPage();
        // $perPage = 6;
        // $currentPageItems = $productInfo->slice(($currentPage - 1) * $perPage, $perPage)->all();
        // $productInfo = new LengthAwarePaginator($currentPageItems, $productInfo->count(), $perPage);
        // $productInfo->withPath('/admin/inventory');

        // $productBatch = $med_batch->concat($vax_batch)->concat($vit_batch);
        // $dataExists = false;
        // if ($vit_info->isNotEmpty()) {
        //     // Data exists
        //     $dataExists = true;
        // }
        // $resposne = [
        //     'dataExists' => $dataExists,
        // ];
        
    //     return view('admin/inventory', compact('productBatch','productInfo', 'vax_info', 'med_info', 'vit_info', 'med_batch', 'vax_batch', 'vit_batch'));
    // }


    public function show(Request $request)
{
    // Retrieve user-selected filter criteria and search term
    $selectedType = $request->input('type');
    $searchTerm = $request->input('q');
    $perPage = $request->input('perPage',6);
    $sortItem = $request->input('sortItems');
    $sortOrder = $request->input('sortOrder');

    $medSwitch = $request->input('medSwitch');
    $vaxSwitch = $request->input('vaxSwitch');
    $vitSwitch = $request->input('vitSwitch');

    $vax_info = VaxInfo::query();
    $med_info = MedInfo::query();
    $vit_info = VitInfo::query();
    
    $med_batch = MedBatch::all();
    $vax_batch = VaxBatch::all();
    $vit_batch = VitBatch::all();

    $queries = [];
    if (!$medSwitch && !$vaxSwitch && !$vitSwitch) {
        $medSwitch = true;
        $vaxSwitch = true;
        $vitSwitch = true;
    }
    if($medSwitch || $vaxSwitch || $vitSwitch){
      if($medSwitch){
        $med = MedInfo::select('med_info.*', 'med_batch.expiration_date', 'med_batch.date_stocked')
        ->join('med_batch', function ($join) {
            $join->on('med_batch.med_id', '=', 'med_info.id')
                ->whereRaw('med_batch.expiration_date = (
                    SELECT MIN(expiration_date) FROM med_batch WHERE med_id = med_info.id
                )');
        });
        if($searchTerm){
            $med->where('med_info.item_name', 'like', '%' . $searchTerm . '%')
            ->orWhere('med_info.quantity', 'like', '%' . $searchTerm . '%')
            ->orWhere('med_info.product_type', 'like', '%' . $searchTerm . '%')
            ->orWhere('med_batch.expiration_date', 'like', '%' . $searchTerm . '%')
            ->orWhere('med_batch.date_stocked', 'like', '%' . $searchTerm . '%');
        }

        $queries[] = $med;
      }
      if($vaxSwitch){
        $vax = VaxInfo::select('vax_info.*', 'vax_batch.expiration_date', 'vax_batch.date_stocked')
        ->join('vax_batch', function ($join) {
            $join->on('vax_batch.vax_id', '=', 'vax_info.id')
                ->whereRaw('vax_batch.expiration_date = (
                    SELECT MIN(expiration_date) FROM vax_batch WHERE vax_id = vax_info.id
                )');
        });
        if($searchTerm){
            $vax->where('vax_info.item_name', 'like', '%' . $searchTerm . '%')
            ->orWhere('vax_info.quantity', 'like', '%' . $searchTerm . '%')
            ->orWhere('vax_info.product_type', 'like', '%' . $searchTerm . '%')
            ->orWhere('vax_batch.expiration_date', 'like', '%' . $searchTerm . '%')
            ->orWhere('vax_batch.date_stocked', 'like', '%' . $searchTerm . '%');
        }
        $queries[] = $vax;
    
      }
      if($vitSwitch){
        $vit = VitInfo::select('vit_info.*', 'vit_batch.expiration_date', 'vit_batch.date_stocked')
        ->join('vit_batch', function ($join) {
            $join->on('vit_batch.vit_id', '=', 'vit_info.id')
                ->whereRaw('vit_batch.expiration_date = (
                    SELECT MIN(expiration_date) FROM vit_batch WHERE vit_id = vit_info.id
                )');
        });
        if($searchTerm){
            $vit->where('vit_info.item_name', 'like', '%' . $searchTerm . '%')
                ->orWhere('vit_info.quantity', 'like', '%' . $searchTerm . '%')
                ->orWhere('vit_info.product_type', 'like', '%' . $searchTerm . '%')
                ->orWhere('vit_batch.expiration_date', 'like', '%' . $searchTerm . '%')
                ->orWhere('vit_batch.date_stocked', 'like', '%' . $searchTerm . '%');
          }
          $queries[] = $vit;
      }  
    }
    if (!empty($queries)) {
        $products = array_shift($queries); // Get the first query
        foreach ($queries as $query) {
            $products = $products->union($query);
        }
    }


    $sortField = [
        0 => 'item_name',
        1 => 'product_type',
        2 => 'quantity',
        3 => 'date_stocked',
        4 => 'expiration_date',
    ][$sortItem] ?? 'item_name';
    

    $sortDirection = $sortOrder == 1 ? 'desc' : 'asc';
    
    // Sort the collection
    $products = $products->orderBy($sortField, $sortDirection)->get();
    
    // PAGINATION
    $perPage = filter_var($perPage, FILTER_VALIDATE_INT);
    if ($perPage === false || $perPage < 5) {
        $perPage = 6; 
    }
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $currentPageItems = $products->slice(($currentPage - 1) * $perPage, $perPage)->all();
    $products = new LengthAwarePaginator($currentPageItems, $products->count(), $perPage);
    $products->withPath('/admin/inventory');


    $productBatch = $med_batch->concat($vax_batch)->concat($vit_batch);
    // $dataExists = false;
    // if ($vit_info->isNotEmpty()) {
    //     // Data exists
    //     $dataExists = true;
    // }
    // $resposne = [
    //     'dataExists' => $dataExists,
    // ];
    $vax_info = VaxInfo::whereNull('archived_at')->get();
    $med_info = MedInfo::whereNull('archived_at')->get();
    $vit_info = VitInfo::whereNull('archived_at')->get();
    $med_batch = MedBatch::orderBy('expiration_date')->get();
    $vax_batch = VaxBatch::orderBy('expiration_date')->get();
    $vit_batch = VitBatch::orderBy('expiration_date')->get();


    return view('admin/inventory', compact('productBatch', 'products', 'vax_info', 'med_info', 'vit_info', 'med_batch', 'vax_batch', 'vit_batch'));
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
                $productBatch = MedBatch::where('med_id', $id)->first();
                break;
            case 'Vaccine':
                $productInfo = VaxInfo::find($id);
                $productBatch = VaxBatch::where('vax_id', $id)->first();
                break;
            case 'Vitamin':
                $productInfo = VitInfo::find($id);
                $productBatch = VitBatch::where('vit_id', $id)->first();
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
                $product = MedBatch::where('med_id', $id)->first();
                $med_info = MedInfo::find($id);

                $product->product_code = $request->input('product_code');
                $product->date_stocked = $request->input('date_stocked');
                $product->expiration_date = $request->input('expiration_date');
                $product->manufacturing_date = $request->input('manufacturing_date');
                $product->batch_no = $request->input('batch_no');
                $product->save();
                $med_info->prod_desc = $request->input('prod_desc');
                $med_info->quantity = $request->input('quantity');
                $med_info->save();
                break;
            case 'Vaccine':
                $product =  VaxBatch::where('vax_id', $id)->first();
                $vax_info = VaxInfo::find($id);

                $product->product_code = $request->input('product_code');
                $product->date_stocked = $request->input('date_stocked');
                $product->expiration_date = $request->input('expiration_date');
                $product->manufacturing_date = $request->input('manufacturing_date');
                $product->batch_no = $request->input('batch_no');
                $product->save();
                $vax_info->prod_desc = $request->input('prod_desc');
                $vax_info->quantity = $request->input('quantity');
                $vax_info->save();
                break;
            case 'Vitamin':
                $product =  VitBatch::where('vit_id', $id)->first();
                $vit_info = VitInfo::find($id);

                $product->product_code = $request->input('product_code');
                $product->date_stocked = $request->input('date_stocked');
                $product->expiration_date = $request->input('expiration_date');
                $product->manufacturing_date = $request->input('manufacturing_date');
                $product->batch_no = $request->input('batch_no');
                $product->save();
                $vit_info->prod_desc = $request->input('prod_desc');
                $vit_info->quantity = $request->input('quantity');
                $vit_info->save();
                break;
            default:
                // Handle the case where the product type is not recognized, e.g., show an error or redirect
                break;
        }

        // Redirect to a page after successful update
        return redirect()->route('admin_inv');
    }

    public function addStock(Request $request, $product_type, $id)
    {
        switch ($product_type) {
            case 'Medicine':
                $med_info = MedInfo::find($id);
                $med_batch = new MedBatch([
                'batch_no' => $request->input('batch_no'),
                'manufacturing_date' => $request->input('manufacturing_date'),
                'expiration_date' => $request->input('expiration_date'),
                'date_stocked' => $request->input('date_stocked'),
                'quantity' => $request->input('quantity'),
                ]);
                $med_info->medBatch()->save($med_batch);
                
                $med_info = MedInfo::find($id);
                $med_info->quantity += $request->input('quantity');
                $med_info->save();
                break;
            case 'Vaccine':
                $vax_info = VaxInfo::find($id);
                $vax_batch = new VaxBatch([
                'batch_no' => $request->input('batch_no'),
                'manufacturing_date' => $request->input('manufacturing_date'),
                'expiration_date' => $request->input('expiration_date'),
                'date_stocked' => $request->input('date_stocked'),
                'quantity' => $request->input('quantity'),
                ]);
                $vax_info->vaxBatch()->save($vax_batch);

                $vax_info = VaxInfo::find($id);
                $vax_info->quantity += $request->input('quantity');
                $vax_info->save();
                break;
            case 'Vitamin':
                $vit_info = VitInfo::find($id);
                $vit_batch = new VitBatch([
                'batch_no' => $request->input('batch_no'),
                'manufacturing_date' => $request->input('manufacturing_date'),
                'expiration_date' => $request->input('expiration_date'),
                'date_stocked' => $request->input('date_stocked'),
                'quantity' => $request->input('quantity'),
                ]);
                $vit_info->vitBatch()->save($vit_batch);
                $vit_info = VitInfo::find($id);
                $vit_info->quantity += $request->input('quantity');
                $vit_info->save();
                break;
            default:
                // Handle the case where the product type is not recognized, e.g., show an error or redirect
                break;
        }
        return redirect()->back()->with('success', 'Product quantity updated successfully');
    }
    public function archive(Request $request, $product_type, $id)
    {
        switch($product_type) {
            case 'Medicine':
                $med_info = MedInfo::find($id);
                $med_info->update(['archived_at' => Carbon::now()]);
                $med_info->medBatch()->update(['archived_at' => Carbon::now()]);
                return redirect()->back()->with('success', 'Product has been archived');
                break;
            case 'Vaccine':
                $vax_info = VaxInfo::find($id);
                $vax_info->update(['archived_at' => Carbon::now()]);
                $vax_info->vaxBatch()->update(['archived_at' => Carbon::now()]);
                break;
            case 'Vitamin':
                $vit_info = VitInfo::find($id);
                $vit_info->update(['archived_at' => Carbon::now()]);
                $vit_info->vitBatch()->update(['archived_at' => Carbon::now()]);
                break;
            default:
                break;
        }
        return redirect()->back()->with('success', 'Product has been archived');
    }

}
   