
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
        Schema::create('med_info', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->integer('quantity');
            $table->string('uses');
            $table->string('side_effects');
            $table->integer('price');
            $table->date('expiration_date');
            $table->string('product_type');
            $table->integer('product_code');
            $table->integer('batch_no');
            $table->date('manufacturing_date');
            $table->date('date_stocked');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('med_info');
    }
};
