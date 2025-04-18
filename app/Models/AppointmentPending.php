<?php

namespace App\Models;

use App\Models\Admin\Clients;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppointmentPending extends Model
{
    use HasFactory;

    protected $table = 'appointment_pending'; 
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
