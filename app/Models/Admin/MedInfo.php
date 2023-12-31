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
        'archived_at'
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

}
