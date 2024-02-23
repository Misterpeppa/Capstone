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
use Svg\Tag\Rect;

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
    $perPage = $request->input('perPage',5);
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
        $med = MedInfo::leftJoin('med_batch', function ($join) {
            $join->on('med_info.id', '=', 'med_batch.med_id')
                ->whereNull('med_info.archived_at')
                ->whereRaw('med_batch.id = (SELECT id FROM med_batch WHERE med_id = med_info.id AND archived_at IS NULL ORDER BY expiration_date ASC LIMIT 1)');
        })
        ->select('med_info.*', 'med_batch.expiration_date', 'med_batch.date_stocked','med_info.quantity as info_quantity')
        ->whereNull('med_info.archived_at');
    
        if($searchTerm){
            $med->search($searchTerm);
        }

        $queries[] = $med;
      }
      if($vaxSwitch){
        $vax = VaxInfo::leftJoin('vax_batch', function ($join) {
            $join->on('vax_info.id', '=', 'vax_batch.vax_id')
                ->whereNull('vax_batch.archived_at')
                ->whereRaw('vax_batch.id = (SELECT id FROM vax_batch WHERE vax_id = vax_info.id AND archived_at IS NULL ORDER BY expiration_date ASC LIMIT 1)');
        })
        ->select('vax_info.*', 'vax_batch.expiration_date', 'vax_batch.date_stocked','vax_info.quantity as info_quantity')
        ->whereNull('vax_info.archived_at');
        if($searchTerm){
            $vax->search($searchTerm);
          }
     
        $queries[] = $vax;
    
      }
      if($vitSwitch){
        $vit = VitInfo::leftJoin('vit_batch', function ($join) {
            $join->on('vit_info.id', '=', 'vit_batch.vit_id')
                ->whereNull('vit_batch.archived_at')
                ->whereRaw('vit_batch.id = (SELECT id FROM vit_batch WHERE vit_id = vit_info.id AND archived_at IS NULL ORDER BY expiration_date ASC LIMIT 1)');
        })
        ->select('vit_info.*', 'vit_batch.expiration_date', 'vit_batch.date_stocked','vit_info.quantity as info_quantity')
        ->whereNull('vit_info.archived_at');
        if($searchTerm){
            $vit->search($searchTerm);
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



    // if($medSwitch || $vaxSwitch || $vitSwitch){
    //     if($medSwitch){
    //       $med = MedInfo::with('medBatch')
    //       ->join('med_batch', 'med_info.id', '=', 'med_batch.med_id')
    //       ->select('med_info.*','med_batch.*','med_info.quantity as info_quantity', 'med_batch.quantity as batch_quantity','med_info.id as id','med_batch.id as batch_id')
    //       ->whereNull('med_info.archived_at')
    //       ->whereNull('med_batch.archived_at');
      
    //       if($searchTerm){
    //           $med->search($searchTerm);
    //       }
  
    //       $queries[] = $med;
    //     }
    //     if($vaxSwitch){
    //       $vax = VaxInfo::with('vaxBatch')
    //       ->join('vax_batch', 'vax_info.id', '=', 'vax_batch.vax_id')
    //       ->select('vax_info.*','vax_batch.*','vax_info.quantity as info_quantity', 'vax_batch.quantity as batch_quantity','vax_info.id as id','vax_info.id as batch_id')
    //       ->whereNull('vax_info.archived_at');
  
    //       $queries[] = $vax;
      
    //     }
    //     if($vitSwitch){
    //       $vit = VitInfo::with('vitBatch')
    //       ->join('vit_batch', 'vit_info.id', '=', 'vit_batch.vit_id')
    //       ->select('vit_info.*','vit_batch.*','vit_info.quantity as info_quantity', 'vit_batch.quantity as batch_quantity','vit_info.id as id','vit_info.id as batch_id')
    //       ->whereNull('vit_info.archived_at');
    //       if($searchTerm){
           
    //         }
    //         $queries[] = $vit;
    //     }  
    //   }
    //   if (!empty($queries)) {
    //       $products = array_shift($queries); // Get the first query
    //       foreach ($queries as $query) {
    //           $products = $products->union($query);
    //       }
    //   }


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
        $perPage = 5; 
    }
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $currentPageItems = $products->slice(($currentPage - 1) * $perPage, $perPage)->all();
    $products = new LengthAwarePaginator($currentPageItems, $products->count(), $perPage);
    $products->withPath('/admin/inventory');


    $productBatch = $med_batch->concat($vax_batch)->concat($vit_batch);
    $medInfo = MedInfo::get();
    $vaxInfo = VaxInfo::get();
    $vitInfo = VitInfo::get();
    $inventory = $medInfo->concat($vaxInfo)->concat($vitInfo);
    // $dataExists = false;
    // if ($vit_info->isNotEmpty()) {
    //     // Data exists
    //     $dataExists = true;
    // }
    // $resposne = [
    //     'dataExists' => $dataExists,
    // ];
    $productExists = $inventory->isEmpty();

    return view('admin/inventory', compact('productBatch', 'products', 'productExists', 'vax_info', 'med_info', 'vit_info', 'med_batch', 'vax_batch', 'vit_batch'));
}


    public function store(Request $request)
    {
        $validatedData = $request->except(['archived_at']);
        $productType = $request->input('product_type');
        switch ($productType) {
            case 'Medicine':
                $existingMedInfo = MedInfo::where('item_name', $validatedData['item_name'])->first();
                if ($existingMedInfo) {
                    $existingMedInfo->quantity += $validatedData['quantity'];
                    // Check if archived_at is not null and set it to null
                    if ($existingMedInfo->archived_at !== null) {
                        $existingMedInfo->archived_at = null;
                    }
                    //$existingMedInfo->prod_desc = null;
                    $existingMedInfo->save();
                    // Determine the highest existing batch number
                    $highestBatchNo = $existingMedInfo->medBatch()->max('batch_no');
                    // Increment the highest batch number by 1
                    $newBatchNo = $highestBatchNo + 1;
                    $medBatchData = [
                        'quantity' => $validatedData['quantity'],
                        'batch_no' => $newBatchNo,
                        'product_code' => $validatedData['product_code'],
                        'manufacturing_date' => $validatedData['manufacturing_date'],
                        'expiration_date' => $validatedData['expiration_date'],
                        'date_stocked' => $validatedData['date_stocked'],
                        'archived_at' => null, // Set it to null explicitly
                    ];
                    $medBatch = new MedBatch($medBatchData);
                    $existingMedInfo->medBatch()->save($medBatch);
                } else {
                    // Create a new MedInfo instance
                    $medInfo = new MedInfo($validatedData);
                    $medInfo->archived_at = null; // Set archived_at to null
                    $medInfo->save();
                    $batch_no = 1;
                    // Create a new batch for the newly created MedInfo
                    $medBatchData = [
                        'quantity' => $validatedData['quantity'],
                        'batch_no' => $batch_no,
                        'product_code' => $validatedData['product_code'],
                        'manufacturing_date' => $validatedData['manufacturing_date'],
                        'expiration_date' => $validatedData['expiration_date'],
                        'date_stocked' => $validatedData['date_stocked'],
                        'archived_at' => null, // Set it to null explicitly
                    ];
                    $medBatch = new MedBatch($medBatchData);
                    $medInfo->medBatch()->save($medBatch);
                }
                break;
            case 'Vaccine':
                $existingVaxInfo = VaxInfo::where('item_name', $validatedData['item_name'])->first();
                if ($existingVaxInfo) {
                    $existingVaxInfo->quantity += $validatedData['quantity'];
                    if ($existingVaxInfo->archived_at !== null) {
                        $existingVaxInfo->archived_at = null;
                    }
                    $existingVaxInfo->save();
                    $highestBatchNo = $existingVaxInfo->vaxBatch()->max('batch_no');
                    $newBatchNo = $highestBatchNo + 1;
                    $vaxBatchData = [
                        'quantity' => $validatedData['quantity'],
                        'batch_no' => $newBatchNo,
                        'product_code' => $validatedData['product_code'],
                        'manufacturing_date' => $validatedData['manufacturing_date'],
                        'expiration_date' => $validatedData['expiration_date'],
                        'date_stocked' => $validatedData['date_stocked'],
                    ];
                    $vaxBatch = new VaxBatch($vaxBatchData);
                    $existingVaxInfo->vaxBatch()->save($vaxBatch);
                } else {
                    $vaxInfo = new VaxInfo($validatedData);
                    $vaxInfo->archived_at = null;
                    $vaxInfo->save();
                    $batch_no = 1;
                    $vaxBatchData = [
                        'quantity' => $validatedData['quantity'],
                        'batch_no' => $batch_no,
                        'product_code' => $validatedData['product_code'],
                        'manufacturing_date' => $validatedData['manufacturing_date'],
                        'expiration_date' => $validatedData['expiration_date'],
                        'date_stocked' => $validatedData['date_stocked'],
                    ];
                    $vaxBatch = new VaxBatch($vaxBatchData);
                    $vaxInfo->vaxBatch()->save($vaxBatch);
                }
                
                break;
    
            case 'Vitamin':
                $existingVitInfo = VitInfo::where('item_name', $validatedData['item_name'])->first();
                if ($existingVitInfo) {
                    $existingVitInfo->quantity += $validatedData['quantity'];
                    if ($existingVitInfo->archived_at !== null) {
                        $existingVitInfo->archived_at = null;
                    }
                    $existingVitInfo->save();
                    // Determine the highest existing batch number
                    $highestBatchNo = $existingVitInfo->vitBatch()->max('batch_no');
                    // Increment the highest batch number by 1
                    $newBatchNo = $highestBatchNo + 1;
                    // Create a new batch for the existing VitInfo
                    $vitBatchData = [
                        'quantity' => $validatedData['quantity'],
                        'batch_no' => $newBatchNo,
                        'product_code' => $validatedData['product_code'],
                        'manufacturing_date' => $validatedData['manufacturing_date'],
                        'expiration_date' => $validatedData['expiration_date'],
                        'date_stocked' => $validatedData['date_stocked'],
                    ];
                    $vitBatch = new VitBatch($vitBatchData);
                    $existingVitInfo->vitBatch()->save($vitBatch);
                } else {
                    // Create a new VitInfo instance
                    $vitInfo = new VitInfo($validatedData);
                    $vitInfo->archived_at = null; // Set archived_at to null
                    $vitInfo->save();
                    $batch_no = 1;
                    // Create a new batch for the newly created VitInfo
                    $vitBatchData = [
                        'quantity' => $validatedData['quantity'],
                        'batch_no' => $batch_no,
                        'product_code' => $validatedData['product_code'],
                        'manufacturing_date' => $validatedData['manufacturing_date'],
                        'expiration_date' => $validatedData['expiration_date'],
                        'date_stocked' => $validatedData['date_stocked'],
                    ];
                    $vitBatch = new VitBatch($vitBatchData);
                    $vitInfo->vitBatch()->save($vitBatch);
                }

                break;
            default:
                // Handle the default case (if necessary)
                break;
        }
        return redirect()->back()->with('success_product', 'Product added successfully');
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

    public function updateProduct(Request $request)
    {
        $product_type = $request->input('editProduct_type');
        $id = $request->input('editId');
        switch ($product_type) {
            case 'Medicine':
                $product = MedBatch::where('med_id', $id)->first();
                $med_info = MedInfo::find($id);
                $oldQuantity = $product->quantity; // Get the old quantity
                $product->product_code = $request->input('product_code');
                $product->date_stocked = $request->input('date_stocked');
                $product->expiration_date = $request->input('expiration_date');
                $product->manufacturing_date = $request->input('manufacturing_date');
                $product->quantity = $request->input('quantity');
                $product->archived_at = null;
                $product->save();
                if ($oldQuantity != $request->input('quantity')) {
                    $med_info->quantity = $request->input('quantity');
                    $med_info->save();
                }
                $med_info->prod_desc = $request->input('prod_desc');
                $med_info->archived_at = null;
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
                $product->archived_at = null;
                $product->save();
                $vax_info->prod_desc = $request->input('prod_desc');
                $vax_info->quantity = $request->input('quantity');
                $vax_info->archived_at = null;
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
                $product->archived_at = null;
                $product->save();
                $vit_info->prod_desc = $request->input('prod_desc');
                $vit_info->quantity = $request->input('quantity');
                $vit_info->archived_at = null;
                $vit_info->save();
                break;
            default:
                // Handle the case where the product type is not recognized, e.g., show an error or redirect
                break;
        }
        return redirect()->back()->with('success', 'Product updated successfully');
    }
    public function batchDetails($product_type, $id, $batchNo)
    {
        switch( $product_type) {
            case 'Medicine':
                $productInfo = MedInfo::findOrFail($id);
                $selectedBatch = MedBatch::where('med_id', $id)->where('batch_no', $batchNo)->first();
                break;
            case 'Vaccine':
                $productInfo = VaxInfo::find($id);
                $selectedBatch = VaxBatch::where('vax_id', $id)->where('batch_no', $batchNo)->first();
                break;
            case 'Vitamin':
                $productInfo = VitInfo::find($id);
                $selectedBatch = VitBatch::where('vit_id', $id)->where('batch_no', $batchNo)->first();
                break;
            default:
             return response()->json(['error' => 'Invalid Product Type']);
        }
        return response()->json($selectedBatch); 
    }

    public function addStock(Request $request, $product_type, $id)
    {
        $batch_no = $request->input('batch_no');
        switch ($product_type) {
            case 'Medicine':
                $med_info = MedInfo::find($id);
                $existingQuantiy = $med_info->quantity;
                $newQuantity = $existingQuantiy + $request->input('quantity');
                $med_info->quantity = $newQuantity;
                $med_info->save();
                $highestBatchNo = $med_info->medBatch()->max('batch_no');
                    // Increment the highest batch number by 1
                $newBatchNo = $highestBatchNo + 1;
                $med_batch = new MedBatch([
                'batch_no' => $newBatchNo,
                'manufacturing_date' => $request->input('manufacturing_date'),
                'expiration_date' => $request->input('expiration_date'),
                'date_stocked' => $request->input('date_stocked'),
                'quantity' => $request->input('quantity'),
                ]);
                $med_batch->archived_at = null;
                $med_info->medBatch()->save($med_batch);
                
                break;
            case 'Vaccine':
                $vax_info = VaxInfo::find($id);
                $existingQuantiy = $vax_info->quantity;
                $newQuantity = $existingQuantiy + $request->input('quantity');
                $vax_info->quantity = $newQuantity;
                $vax_info->save();
                $highestBatchNo = $vax_info->medBatch()->max('batch_no');
                    // Increment the highest batch number by 1
                $newBatchNo = $highestBatchNo + 1;
                $vax_batch = new VaxBatch([
                'batch_no' => $newBatchNo,
                'manufacturing_date' => $request->input('manufacturing_date'),
                'expiration_date' => $request->input('expiration_date'),
                'date_stocked' => $request->input('date_stocked'),
                'quantity' => $request->input('quantity'),
                ]);
                $vax_info->vaxBatch()->save($vax_batch);
                break;
            case 'Vitamin':
                $vit_info = VitInfo::find($id);
                $existingQuantiy = $vit_info->quantity;
                $newQuantity = $existingQuantiy + $request->input('quantity');
                $vit_info->quantity = $newQuantity;
                $vit_info->save();
                $highestBatchNo = $vit_info->medBatch()->max('batch_no');
                // Increment the highest batch number by 1
                $newBatchNo = $highestBatchNo + 1;
                $vit_batch = new VitBatch([
                'batch_no' => $newBatchNo,
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
                return redirect()->back()->with('success', 'Product has been archived');
                break;
            case 'Vitamin':
                $vit_info = VitInfo::find($id);
                $vit_info->update(['archived_at' => Carbon::now()]);
                $vit_info->vitBatch()->update(['archived_at' => Carbon::now()]);
                return redirect()->back()->with('success', 'Product has been archived');
                break;
            default:
                break;
        }
        return redirect('/admin/inventory');
    }

    public function viewBatch($product_type, $id)
    {
        switch( $product_type) {
            case 'Medicine':
                $productInfo = MedInfo::findOrFail($id);
                $productBatch = MedBatch::where('med_id', $id)->get();
                break;
            case 'Vaccine':
                $productInfo = VaxInfo::find($id);
                $productBatch = VaxBatch::where('vax_id', $id)->get();
                break;
            case 'Vitamin':
                $productInfo = VitInfo::find($id);
                $productBatch = VitBatch::where('vit_id', $id)->get();
                break;
            default:
             return response()->json(['error' => 'Invalid Product Type']);
        }
        return response()->json($productBatch); 
    }
    public function deductStock(Request $request)
    {
        $product_type = $request->input('product_type');
        $id = $request->input('id');
        //dd($product_type);
        $batch_no = $request->input('batch_no');
        switch($product_type){
            case 'Medicine':
                $productInfo = MedInfo::findOrFail($id);
                $productInfo->quantity -= $request->input('deduct');
                $productInfo->save();
                $medBatch = MedBatch::where('batch_no', $batch_no)
                            ->where('med_id', $productInfo->id)
                            ->firstOrFail();
                $medBatch->quantity -= $request->input('deduct');
                $medBatch->save();
                return redirect()->back()->with('success', 'Product has been archived');
                break;
            case 'Vaccine':
                $productInfo = VaxInfo::findOrFail($id);
                $productInfo->quantity -= $request->input('deduct');
                $productInfo->save();
                $vaxBatch = VaxBatch::where('batch_no', $batch_no)
                            ->where('vax_id', $productInfo->id)
                            ->firstOrFail();
                $vaxBatch->quantity -= $request->input('deduct');
                $vaxBatch->save();
                return redirect()->back()->with('success', 'Product has been archived');
                break;
            case 'Vitamin':
                $productInfo = VitInfo::findOrFail($id);
                $productInfo->quantity -= $request->input('deduct');
                $productInfo->save();
                $vitBatch = VitBatch::where('batch_no', $batch_no)
                            ->where('vit_id', $productInfo->id)
                            ->firstOrFail();
                $vitBatch->quantity -= $request->input('deduct');
                $vitBatch->save();
                return redirect()->back()->with('success', 'Product has been archived');
                break;
            default:
                break;
        }
        return redirect('admin/inventory');
    }

    public function displayBatch($product_type, $id)
    {
        
    }

}
   