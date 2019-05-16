<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAspirantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspirantes', function (Blueprint $table) {
            $table->increments('codigo_de_ficha');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('direccion');
            $table->string('fecha_de_nacimiento');
            $table->string('sexo');
            $table->string('tutor');
            $table->string('codigo_de_curso');
            $table->string('fecha_matricula');
            $table->string('status');
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
        Schema::dropIfExists('aspirantes');
    }
}
