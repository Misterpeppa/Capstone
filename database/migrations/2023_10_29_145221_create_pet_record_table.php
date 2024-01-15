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
        Schema::create('pet_record', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('pet_id');
            $table->text('allergies')->nullable();
            $table->text('existing_condition')->nullable();
            $table->text('current_medication')->nullable();
            $table->timestamp('archived_at')->nullable();
            $table->string('source')->default('Pet Record');
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('clients');
            $table->foreign('pet_id')->references('id')->on('pet_info');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_record');
    }
};
