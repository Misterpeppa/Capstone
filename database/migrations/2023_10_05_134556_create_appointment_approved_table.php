<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointment_approved', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key
            $table->string('petName');
            $table->string('petType');
            $table->string('breed');
            $table->string('notes')->nullable();
            $table->string('appointmentType');
            $table->date('appointmentDate');
            $table->time('appointmentTime');
            $table->string('completed_at')->nullable();
            $table->timestamp('archived_at')->nullable();
            $table->string('status')->nullable();
            $table->string('source')->default('Appointment');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_approved');
    }
};
