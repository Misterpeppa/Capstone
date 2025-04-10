<?php

namespace App\Models\Admin;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clients extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $guard = 'client';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    public function appointmentPending(): HasMany
    {
        return $this->hasMany(AppointmentPending::class, 'user_id');
    }
    public function appointmentApproved(): HasMany
    {
        return $this->hasMany(AppointmentApproved::class, 'user_id');
    }
    public function appointmentRejected(): HasMany
    {
        return $this->hasMany(AppointmentRejected::class, 'user_id');
    }
}
