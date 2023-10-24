<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetInfo extends Model
{
    use HasFactory;
    protected $table = 'pet_info';

    protected $fillable = [
        'name',
        'age',
        'birthdate',
        'species',
        'breed',
        'gender',
        'weight'
    ];
}
