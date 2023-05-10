<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha');
            $table->unsignedBigInteger('profesional_id');
            $table->unsignedBigInteger('paciente_id');
            $table->unsignedBigInteger('razon_visita_id');
            
            $table->foreign('profesional_id')->references('id')->on('profesional');
            $table->foreign('paciente_id')->references('id')->on('paciente');
            $table->foreign('razon_visita_id')->references('id')->on('razonVisita');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cita');
    }
}
