<?php

namespace App\Models\admin;

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
        'uses',
        'side_effects',
        'price',
        'expiration_date',
        'batch_no',
        'manufacturing_date',
        'date_stocked',
        'product_type',
        'product_code'
    ];

    public function MedHistory(): HasMany
    {
        return $this->hasMany(MedHistory::class, 'med_id');
    }
    public function SurgHistory(): HasMany
    {
        return $this->hasMany(SurgHistory::class, 'med_id');
    }
}
