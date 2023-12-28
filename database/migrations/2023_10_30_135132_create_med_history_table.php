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
        Schema::create('med_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('petrecord_id');
            $table->string('diagnosis');
            $table->date('diagnosis_date');
            $table->string('treatment');
            $table->unsignedBigInteger('med_id');
            $table->timestamps();

            $table->foreign('petrecord_id')->references('id')->on('pet_record');
            $table->foreign('med_id')->references('id')->on('med_info');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('med_history');
    }
};
