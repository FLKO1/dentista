<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->id();
            $table->string('rut')->unique();
            $table->string('nombrepaciente');
            $table->string('correo')->nullable();
            $table->string('telefono')->nullable();
            $table->unsignedBigInteger('prevision_id')->nullable();
            $table->foreign('prevision_id')->references('id')->on('prevision');
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
        Schema::dropIfExists('paciente');
    }
}
