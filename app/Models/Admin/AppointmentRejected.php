<?php

namespace App\Models\Admin;

use App\Models\User\Clients;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppointmentRejected extends Model
{
    use HasFactory;

    protected $table = 'appointment_rejected'; 
    protected $fillable = [
        'user_id',
        'petType',
        'breed',
        'appointmentType',
        'appointmentDate',
        'appointmentTime',
    ];

    public function clients(): BelongsTo
    {
        return $this->belongsTo(Clients::class, 'user_id');
    }

}
