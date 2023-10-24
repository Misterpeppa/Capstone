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
        'petRecord_id',
        'date'
    ];

    public function vax(): BelongsTo
    {
        return $this->belongsTo(VaxInfo::class, 'vax_id');
    }
    public function petRecord(): BelongsTo
    {
        return $this->belongsTo(PetRecord::class, 'petRecord_id');
    }
}
