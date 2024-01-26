<?php

namespace App\Models\Admin;

use App\Models\Admin\MedBatch;
use App\Models\Admin\MedHistory;
use App\Models\Admin\SurgHistory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MedInfo extends Model
{
    use HasFactory;
    protected $table = 'med_info';

    protected $fillable = [
        'item_name',
        'quantity',
        'prod_desc',
        'price',
        'product_type',
        'archived_at',
        'source',
    ];

    public function medHistory(): HasMany
    {
        return $this->hasMany(MedHistory::class, 'med_id');
    }
    public function surgHistory(): HasMany
    {
        return $this->hasMany(SurgHistory::class, 'med_id');
    }
    public function medBatch(): HasMany
    {
        return $this->hasMany(MedBatch::class, 'med_id', 'id');
    }
    public function archived_at($query){
        $query->whereNull('archived_at');
    }
    public function scopeSearch($query, $searchTerm)
    {
        // Split the search term into an array of individual terms
        $searchTerms = explode(' ', $searchTerm);
    
        return $query->where(function ($query) use ($searchTerms) {
            foreach ($searchTerms as $term) {
                $term = '%' . $term . '%';
    
                $query->orWhere(function ($query) use ($term) {
                    $query->where('item_name', 'like', $term)
                    ->orWhere('med_info.quantity', 'like', $term)
                        ->orWhere('product_type', 'like', $term);
                });
                $query->orWhereHas('medBatch', function ($query) use ($term) {
                    $query->where('expiration_date', 'like', $term)
                 
                        ->orWhere('date_stocked', 'like', $term);
                });
            }
    
            $query->whereNull('med_info.archived_at')
                  ->whereNull('med_batch.archived_at');
        });
    }
    public function scopeInventory($query, $request)
    {
         $query->where(function ($query) use ($request) {
            $request->input('inventoryCheck')=='on';
            $query->orWhere('source', 'LIKE', 'Inventory');
        });
    }

}
