<?php

namespace App\Models\Admin;

use App\Models\User\Clients;
use App\Models\Admin\PetInfo;
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
        'archived_at',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Clients::class, 'owner_id');
    }

    public function pet(): BelongsTo
    {
        return $this->belongsTo(PetInfo::class, 'pet_id');
    }

    public function vaxHistory(): HasMany
    {
        return $this->hasMany(VaxHistory::class, 'petrecord_id');
    }

    public function medHistory(): HasMany
    {
        return $this->hasMany(MedHistory::class, 'petrecord_id');
    }
    public function surgHistory(): HasMany
    {
        return $this->hasMany(SurgHistory::class, 'petrecord_id');
    }

}
