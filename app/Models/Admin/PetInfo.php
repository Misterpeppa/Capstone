<?php

namespace App\Models\Admin;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PetInfo extends Model
{
    use HasFactory;
    protected $table = 'pet_info';

    protected $fillable = [
        'owner_id',
        'name',
        'age',
        'birthdate',
        'species',
        'breed',
        'gender',
        'weight',
        'sterilization'
    ];

    public function owner(): BelongsTo 
    {
        return $this->belongsTo(Client::class, 'owner_id');
    }
}
