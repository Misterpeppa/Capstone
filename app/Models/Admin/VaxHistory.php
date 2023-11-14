<?php

namespace App\Models\Admin;

use App\Models\admin\VaxInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VaxHistory extends Model
{
    use HasFactory;
    protected $table = 'vax_history';
    protected $fillable = [
        'vax_id',
        'petrecord_id',
        'vaccination_date'
    ];

    public function vax(): BelongsTo
    {
        return $this->belongsTo(VaxInfo::class, 'vax_id');
    }
    public function PetRecord(): BelongsTo
    {
        return $this->belongsTo(PetRecord::class, 'petrecord_id');
    }
}
