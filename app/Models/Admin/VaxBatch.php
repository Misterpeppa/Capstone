<?php

namespace App\Models\Admin;

use App\Models\admin\VaxInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VaxBatch extends Model
{
    use HasFactory;
    protected $table = 'vax_batch';
    protected $fillable = [
        'vax_id',
        'batch_no',
        'product_code',
        'manufacturing_date',
        'expiration_date',
        'date_stocked'
    ];

    public function vax(): BelongsTo
    {
        return $this->belongsTo(VaxInfo::class, 'vax_id');
    }
}
