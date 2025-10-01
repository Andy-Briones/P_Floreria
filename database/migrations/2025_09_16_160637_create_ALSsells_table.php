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
        Schema::create('ALSsells', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->date('fecha_venta');
            $table->decimal('total',10,2);
            $table->foreignId('product_id')->constrained('ALSproducts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ALSsells');
    }
};
