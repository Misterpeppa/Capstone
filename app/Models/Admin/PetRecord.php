<?php

namespace App\Models\Admin;

use App\Models\admin\VaxInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PetRecord extends Model
{
    use HasFactory;
    protected $table = 'pet_record';

    protected $fillable = [
        'owner_id',
        'pet_id',
        'condition_id',
        'allergy',
        'vax_id',
        'vax_history'
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'owner_id');
    }

    public function pet(): BelongsTo
    {
        return $this->belongsTo(PetInfo::class, 'pet_id');
    }

    public function condition(): BelongsTo
    {
        return $this->belongsTo(Condition::class, 'condition_id');
    }

    public function allergy(): BelongsTo
    {
        return $this->belongsTo(Allergy::class, 'allergy_id');
    }

}
