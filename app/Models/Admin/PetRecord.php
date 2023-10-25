<?php

namespace App\Models\Admin;

use App\Models\admin\VaxInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PetRecord extends Model
{
    use HasFactory;
    protected $table = 'pet_record';

    protected $fillable = [
        'owner_id',
        'pet_id',
        'allergies',
        'existing_condtion',
        'current_medication',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'owner_id');
    }

    public function pet(): BelongsTo
    {
        return $this->belongsTo(PetInfo::class, 'pet_id');
    }

    public function VaxHistory(): HasMany
    {
        return $this->hasMany(VaxHistory::class, 'petrecord_id');
    }

    public function MedHistory(): HasMany
    {
        return $this->hasMany(MedHistory::class, 'petrecord_id');
    }
    public function SurgHistory(): HasMany
    {
        return $this->hasMany(SurgHistory::class, 'petrecord_id');
    }

}
