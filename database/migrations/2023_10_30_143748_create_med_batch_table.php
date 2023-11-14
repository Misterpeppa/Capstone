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
        Schema::create('med_batch', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('med_id');
            $table->integer('batch_no');
            $table->integer('product_code');
            $table->date('manufacturing_date');
            $table->date('expiration_date');
            $table->date('date_stocked');
            $table->timestamps();

            $table->foreign('med_id')->references('id')->on('med_info');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('med_batch');
    }
};
