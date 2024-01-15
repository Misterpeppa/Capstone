<?php

namespace App\Models\Admin;

use App\Models\admin\MedInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SurgHistory extends Model
{
    use HasFactory;
    protected $table = 'surg_history';
    protected $fillable = [
        'petrecord_id',
        'surgery_type',
        'severity',
        'med_id',
        'surgery_date',
        'surgery_note',
    ];

    public function petRecord(): BelongsTo
    {
        return $this->belongsTo(PetRecord::class, 'petrecord_id');
    }
    public function Med(): BelongsTo
    {
        return $this->belongsTo(MedInfo::class, 'med_id');
    }
}
