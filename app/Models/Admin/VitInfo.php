<?php

namespace App\Models\Admin;

use App\Models\Admin\VitBatch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VitInfo extends Model
{
    use HasFactory;
    protected $table = 'vit_info';

    protected $fillable = [
        'item_name',
        'quantity',
        'prod_desc',
        'price',
        'product_type',
        'archived_at',
        'source',
    ];

    public function vitBatch(): HasMany
    {
        return $this->hasMany(VitBatch::class, 'vit_id');
    }
    public function scopeSearch($query, $searchTerm)
    {
        // Split the search term into an array of individual terms
        $searchTerms = explode(' ', $searchTerm);
    
        return $query->where(function ($query) use ($searchTerms) {
            foreach ($searchTerms as $term) {
                $term = '%' . $term . '%';
    
                $query->orWhere('item_name', 'like', $term)
                    ->orWhere('vit_info.quantity', 'like', $term)
                    ->orWhere('product_type', 'like', $term);
                
                $query->orWhereHas('vitBatch', function ($query) use ($term) {
                    $query->where('expiration_date', 'like', $term)
                        ->orWhere('date_stocked', 'like', $term);
                });
                
            }
            
        });
    }
    
}
