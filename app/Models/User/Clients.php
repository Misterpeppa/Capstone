<?php

namespace App\Models\User;

use App\Models\Admin\PetInfo;
use App\Models\Admin\PetRecord;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clients extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;
    protected $guard = 'clients';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'gender',
        'birthdate',
        'email',
        'phone',
        'email_verified_at'
    ];

    protected $hidden = [
        'password',
        'rememeber_token',
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
    public function pet(): HasMany
    {
        return $this->hasMany(PetInfo::class, 'user_id');
    }
    public function petRecord(): HasMany
    {
        return $this->hasMany(PetRecord::class, 'user_id');
    }
    public function clients($id)
    {
        return $this->find($id);
    }
    public function hasVerifiedEmail()
    {
        return $this->email_verified_at !== null;
    }
    public function markEmailAsVerified()
    {
        return $this->forceFill([
            'email_verified_at' => $this->freshTimestamp(),
        ])->save();
    }
}
