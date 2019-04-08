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
            $table->string('n_matricula');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('direccion');
            $table->string('fecha_de_nacimiento');
            $table->string('sexo');
            $table->string('tutor');
            $table->string('ccodigo de curso');
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
