<?php

namespace App\Console\Commands;

use App\Models\Admin\AppointmentApproved;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class RemindAppointments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:remind-appointments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send appointment reminders to users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Find appointments that are happening within the next 24 hours
        $appointments = AppointmentApproved::whereDate('date', now()->addDay())->get();

        foreach ($appointments as $appointment) {
            // Send email reminder to the user
            //Mail::to($appointment->user->email)->send(new AppointmentReminder($appointment));
        }
    }
}
