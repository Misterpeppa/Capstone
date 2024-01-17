<?php

namespace App\Models\Admin;

use App\Models\User\Clients;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppointmentPending extends Model
{
    use HasFactory;

    protected $table = 'appointment_pending'; 
    protected $fillable = [
        'user_id',
        'petName',
        'petType',
        'breed',
        'notes',
        'appointmentType',
        'appointmentDate',
        'appointmentTime',
        'status',
        'source',
    ];

    public function clients(): BelongsTo
    {
        return $this->belongsTo(Clients::class, 'user_id');
    }
    public function scopePetType($query, $request)
    {
        $query->where(function ($query) use ($request) {
            if ($request->input('dogCheck') == 'on') {
                $query->orWhere('petType', 'like', '%dog%');
            }

            if ($request->input('catCheck') == 'on') {
                $query->orWhere('petType', 'like', '%cat%');
            }
        });
    }
    public function scopeSearch($query, $searchTerm)
    {
        // Split the search term into an array of individual terms
        $searchTerms = explode(' ', $searchTerm);
    
        return $query->where(function ($query) use ($searchTerms) {
            foreach ($searchTerms as $term) {
                $term = '%' . $term . '%';
    
                $query->orWhere('petName', 'like', $term)
                    ->orWhere('petType', 'like', $term)
                    ->orWhere('breed', 'like', $term)
                    ->orWhere('appointmentType', 'like', $term)
                    ->orWhere('appointmentDate', 'like', $term)
                    ->orWhere('status', 'like', $term);
                 
    
                // Add search for user's name
                $query->orWhereHas('clients', function ($query) use ($term) {
                    $query->where('first_name', 'like', $term)
                        ->orWhere('last_name', 'like', $term)
                        ->orWhere('middle_name', 'like', $term)
                        ->orWhere('suffix', 'like', $term);
                });
                
            }
            $query->whereNull('archived_at');
        });
    }

}
