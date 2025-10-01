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
        Schema::create('ALSclients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fSurname');
            $table->string('sSurname');
            $table->string('dni', length:8);
            $table->string('telefono', length:9);
            $table->string('correo');
            $table->date('fecha_nacimiento');
            $table->boolean('genero');
            $table->string('direccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ALSclients');
    }
};
