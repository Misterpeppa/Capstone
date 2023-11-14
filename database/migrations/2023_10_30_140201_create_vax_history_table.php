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
        Schema::create('vax_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vax_id');
            $table->unsignedBigInteger('petrecord_id');
            $table->date('vaccination_date');
            $table->timestamps();

            $table->foreign('vax_id')->references('id')->on('vax_info');
            $table->foreign('petrecord_id')->references('id')->on('pet_record');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vax_history');
    }
};
