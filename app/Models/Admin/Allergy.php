<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
    use HasFactory;
    protected $table = 'allergy';

    protected $fillable = [
        'allery_name',
        'reaction',
        'severity'
    ];
}
