<?php

namespace App\Models\Admin;

use App\Models\admin\MedInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MedBatch extends Model
{
    use HasFactory;
    protected $table = 'med_batch';
    protected $fillable = [
        'med_id',
        'quantity',
        'batch_no',
        'product_code',
        'manufacturing_date',
        'expiration_date',
        'date_stocked',
        'archived_at'
    ];

    function Med(): BelongsTo
    {
        return $this->belongsTo(MedInfo::class, 'med_id');
    }
}
