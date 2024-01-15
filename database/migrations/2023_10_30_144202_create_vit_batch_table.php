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
        Schema::create('vit_batch', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vit_id');
            $table->integer('batch_no');
            $table->bigInteger('product_code')->default(12);
            $table->date('manufacturing_date');
            $table->date('expiration_date');
            $table->date('date_stocked');
            $table->timestamp('archived_at');
            $table->timestamps();

            $table->foreign('vit_id')->references('id')->on('vit_info')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vit_batch');
    }
};
