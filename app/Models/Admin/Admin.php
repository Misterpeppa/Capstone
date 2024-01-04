<?php

namespace App\Models\Admin;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $guard = 'admins';

    protected $fillable = [
        'email',
        'password'
    ];
}
