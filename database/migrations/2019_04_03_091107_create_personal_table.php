<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->string('codigo_personal');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('direccion');
            $table->string('fecha-nacimiento');
            $table->string('grado_de_estudio');
            $table->string('cargo');
            $table->string('fecha_de_inicio');
            $table->string('antiguedad');
            $table->string('curp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal');
    }
}
