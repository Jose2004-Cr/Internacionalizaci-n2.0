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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Director');
            $table->string('Evento_Inicio');
            $table->string('Evento_Fin');
            $table->string('Actividad');
            /**
             * llamando la tabla asistencia y aplicando llave foranea al atributo id
             */
            $table->unsignedBigInteger('asistencia_id');
            $table->foreign('asistencia_id')
                ->references('id')
                ->on('asistencias')
                ->onDelete('cascade');
            /**
             * llamando la tabla actividad y aplicando llave foranea al atributo id
             */
            $table->unsignedBigInteger('actividad_id');
            $table->foreign('actividad_id')
                ->references('id')
                ->on('actividads')
                ->onDelete('cascade');
            /**
             * llamando la tabla movilidad y aplicando llave foranea al atributo id
             */
            $table->unsignedBigInteger('movilidad_id');
            $table->foreign('movilidad_id')
                ->references('id')
                ->on('movilidads')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
