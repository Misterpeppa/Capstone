<?php

namespace App\Models\Admin;

use App\Models\User\Clients;
use App\Models\Admin\PetInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Log;

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
        'source',
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
    public function scopePetrecord($query, $request)
    {
        $query->where(function ($query) use ($request){
            if ($request->has('petrecordCheck') && $request->input('petrecordCheck') == 'on') {
                $query->where('source', 'LIKE', '&Pet Record%');
            }
        });
    }
    public function scopeSpecies($query, $request)
    {
        $query->whereHas('pet', function ($query) use ($request) {
            if ($request->has('dogCheck') && $request->input('dogCheck') === 'on') {
                $query->orWhere('species', 'like', '%Dog%');
            }

            if ($request->has('catCheck') && $request->input('catCheck') === 'on') {
                $query->orWhere('species', 'like', '%Cat%');
            }
        });
    }


}
