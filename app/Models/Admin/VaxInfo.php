<?php

namespace App\Models\admin;

use App\Models\Admin\PetRecord;
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
        'effects',
        'price',
        'expiration_date',
        'batch_no',
        'manufacturing_date',
        'date_stocked',
        'product_type',
        'product_code'
    ];

    public function VaxHistory(): HasMany
    {
        return $this->hasMany(VaxHistory::class, 'vax_id');
    }
}
