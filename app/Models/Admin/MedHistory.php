<?php

namespace App\Models\Admin;

use App\Models\admin\MedInfo;
use App\Models\admin\PetRecord;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MedHistory extends Model
{
    use HasFactory;
    protected $table = 'med_history';
    protected $fillable = [
        'petrecord_id',
        'diagnosis',
        'diagnosis_date',
        'treatment',
        'med_id'
    ];

    public function PetRecord(): BelongsTo
    {
        return $this->belongsTo(PetRecord::class, 'petrecord_id');
    }
    public function Med(): BelongsTo
    {
        return $this->belongsTo(MedInfo::class, 'med_id');
    }
}
