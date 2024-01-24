<?php

namespace App\Models\User;

use App\Models\Admin\AppointmentApproved;
use App\Models\Admin\AppointmentPending;
use App\Models\Admin\AppointmentRejected;
use App\Models\Admin\PetInfo;
use App\Models\Admin\PetRecord;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailTrait;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class Clients extends Authenticatable implements MustVerifyEmailContract
{
    // use AuthenticatesUsers;
    use MustVerifyEmailTrait;
    use SoftDeletes;
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
        'password',
        'phone',
        'email_verified_at',
        'deleted_at',
        'archived_at'
    ];

    protected $hidden = [
        'remember_token',
    ];
    public function getEmailForVerification()
    {
        return $this->email;
    }

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
        return $this->hasMany(PetInfo::class, 'owner_id');
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
