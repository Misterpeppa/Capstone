<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnerInfo extends Model
{
    use HasFactory;
    protected $table = 'owner_infos';

    protected $fillable = [
        'name',
        'phone',
        'email'
    ];

}
