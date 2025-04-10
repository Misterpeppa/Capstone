<?php

use App\Models\Admin\Clients;
use App\Models\AppointmentPending;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AppointmentTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_id_is_stored_in_appointment()
    {
        // Create a user
        $user = Clients::factory()->create();

        // Create an appointment associated with the user
        $appointment = AppointmentPending::factory()->create([
            'user_id' => $user->id,
        ]);

        // Retrieve the appointment from the database
        $savedAppointment = AppointmentPending::find($appointment->id);

        // Assert that the user ID matches
        $this->assertEquals($user->id, $savedAppointment->user_id);
    }
}

