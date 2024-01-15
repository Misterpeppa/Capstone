<?php

namespace App\Models\Admin;

use App\Models\User\Clients;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppointmentApproved extends Model
{
    use HasFactory;

    protected $table = 'appointment_approved'; 
    protected $fillable = [
        'user_id',
        'petName',
        'petType',
        'breed',
        'notes',
        'appointmentType',
        'appointmentDate',
        'appointmentTime',
        'completed_at',
        'archived_at',
        'status',
        'source,'
    ];

    public function clients(): BelongsTo
    {
        return $this->belongsTo(Clients::class, 'user_id');
    }
}