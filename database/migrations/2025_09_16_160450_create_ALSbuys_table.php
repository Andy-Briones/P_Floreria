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
        Schema::create('ALSbuys', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_compra');
            $table->decimal('total',10,2);
            $table->foreignId('supplier_id')->constrained('ALSsuppliers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ALSbuys');
    }
};
