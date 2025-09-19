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
        Schema::create('bosses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fSurname');
            $table->string('sSurname');
            $table->string('dni', length:8);
            $table->string('telefono', length:9);
            $table->string('correo');
            $table->date('fecha_nacimiento');
            $table->boolean('genero');
            $table->date('fecha_contratacion');
            $table->foreignId('administrator_id')->constrained('administrators')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bosses');
    }
};
