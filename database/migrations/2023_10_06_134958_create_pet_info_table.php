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
        Schema::create('pet_info', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->date('birthdate');
            $table->string('species');
            $table->string('breed');
            $table->string('gender');
            $table->float('weight');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_info');
    }
};
