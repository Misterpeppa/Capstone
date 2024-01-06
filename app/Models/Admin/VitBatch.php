<?php

namespace App\Models\Admin;

use App\Models\admin\VitInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VitBatch extends Model
{
    use HasFactory;
    protected $table = 'vit_batch';
    protected $fillable = [
        'vit_id',
        'quantity',
        'batch_no',
        'product_code',
        'manufacturing_date',
        'expiration_date',
        'date_stocked',
        'archived_at'
    ];

    public function Vit(): BelongsTo
    {
        return $this->belongsTo(VitInfo::class, 'vit_id');
    }
}
