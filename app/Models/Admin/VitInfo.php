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
    ];

    public function vitBatch(): HasMany
    {
        return $this->hasMany(VitBatch::class, 'vit_id');
    }
    
}
