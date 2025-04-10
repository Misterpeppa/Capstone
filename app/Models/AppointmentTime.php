<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment;

class AppointmentTime extends Model
{
    use HasFactory;

    protected $table = 'appointment_times';

    protected $fillable = [
        'appointmentDate',
        'appointmentTime',
    ];

    // Define the one-to-one relationship with Appointment model
    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }
}
