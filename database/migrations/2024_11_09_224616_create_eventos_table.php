<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id(); // ID del evento
            $table->string('nombre'); // Nombre del evento
            $table->string('ubicacion'); // Ubicación del evento
            $table->date('fecha'); // Fecha del evento
            $table->time('hora'); // Hora del evento
            $table->text('descripcion')->nullable(); // Descripción del evento
            $table->string('tipo'); // Tipo ('todos' o 'carrera')
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
