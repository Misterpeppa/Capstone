<?php

namespace App\Models\admin;

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
    ];

    public function vaxHistory(): HasMany
    {
        return $this->hasMany(VaxHistory::class, 'vax_id');
    }
    public function vaxBatch(): HasMany
    {
        return $this->hasMany(VaxBatch::class, 'vax_id');
    }
}
