<?php

namespace App\Models\Admin;

use App\Models\Admin\PetRecord;
use App\Models\Admin\VaxBatch;
use App\Models\Admin\VaxHistory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VaxInfo extends Model
{
    use HasFactory;
    protected $table = 'vax_info';

    protected $fillable = [
        'item_name',
        'quantity',
        'prod_desc',
        'price',
        'product_type',
        'archived_at'
    ];

    public function vaxHistory(): HasMany
    {
        return $this->hasMany(VaxHistory::class, 'vax_id');
    }
    public function vaxBatch(): HasMany
    {
        return $this->hasMany(VaxBatch::class, 'vax_id');
    }
    public function scopeSearch($query, $searchTerm)
    {
        // Split the search term into an array of individual terms
        $searchTerms = explode(' ', $searchTerm);
    
        return $query->where(function ($query) use ($searchTerms) {
            foreach ($searchTerms as $term) {
                $term = '%' . $term . '%';
    
                $query->orWhere('item_name', 'like', $term)
                    ->orWhere('vax_info.quantity', 'like', $term)
                    ->orWhere('product_type', 'like', $term);
                
                $query->orWhereHas('vaxBatch', function ($query) use ($term) {
                    $query->where('expiration_date', 'like', $term)
                        ->orWhere('date_stocked', 'like', $term);
                });
                
            }
        });
    }
}
