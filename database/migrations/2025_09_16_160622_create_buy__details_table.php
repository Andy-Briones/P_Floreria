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
        Schema::create('buy__details', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->decimal('price_unit',10,2);
            $table->decimal('subtotal',10,2);
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('buy_id')->constrained('buys')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy__details');
    }
};
