<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->string('matricula');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('direccion');
            $table->string('imagen');
            $table->string('fecha_de_nacimiento');
            $table->string('sexo');
            $table->string('tutor');
            $table->string('codigo_de_curso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
