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
            $table->date('Evento_Inicio');
            $table->date('Evento_Fin');
            $table->unsignedBigInteger('actividad_id');
            $table->unsignedBigInteger('movilidad_id');
            $table->timestamps();

            $table->foreign('actividad_id')->references('id')->on('actividads')->onDelete('cascade');
            $table->foreign('movilidad_id')->references('id')->on('movilidads')->onDelete('cascade');
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
