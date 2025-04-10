<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;
    protected $table = 'condition';

    protected $fillable = [
        'diagnosis',
        'med_name',
        'uses',
        'side_effects'
    ];
}
