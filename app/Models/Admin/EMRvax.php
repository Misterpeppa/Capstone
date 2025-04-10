<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EMRvax extends Model
{
    use HasFactory;
    protected $table = 'emr_vax';

    protected $fillable = [
        'vax_name',
        'effects',
        'vax_date'
    ];
}
