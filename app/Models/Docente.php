<?php

namespace App\Models;
// -------------------------------------
// -           Profesores              -
// -------------------------------------
// -Codigo maestro     --- Texto       -
// -------------------------------------
// -Nombre             --- Texto       -
// -------------------------------------
// -Apellidos           --- Texto      -
// -------------------------------------
// -especialidad           --- Texto      -
// -------------------------------------
// -telefono           --- Texto      -
// -------------------------------------
// -Fecha de nacimiento --- Fecha      -
// -------------------------------------
// -Curp               --- Texto      -
// -------------------------------------
// -Email               --- Texto      -
// -------------------------------------

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
  protected $table = 'docentes';
  protected $primatyKey='codigo_de_maestro';
  protected $filable=['codigo_de_maestro','nombre','apellidos','especialidad','telefono','fecha_de_nacimiento',
  'curp','email'

  ];
    //
}
