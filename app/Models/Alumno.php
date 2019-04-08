<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// -------------------------------------
// -            Alumnos                -
// -------------------------------------
// -N matricula         --- Texto      -
// -------------------------------------
// -Nombre              --- Texto      -
// -------------------------------------
// -Apellidos           --- Texto      -
// -------------------------------------
// -Direccion           --- Texto      -
// -------------------------------------
// -Municipio           --- Texto      -
// -------------------------------------
// -Codigo postal       --- Texto      -
// -------------------------------------
// -Telefono            --- Texto      -
// -------------------------------------
// -Fecha de nacimiento --- Fecha      -
// -------------------------------------
// -Curp                --- Texto      -
// -------------------------------------

class Alumno extends Model
{
  'n_matricula','nombre','apellidos','direccion','fecha_nacimiento','sexo','tutor','codigo_de_curso'
}
