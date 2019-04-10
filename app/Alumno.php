<?php

namespace App;

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
  public $timestamps = false;
  protected $table ='alumnos';
  protected $primaryKey= 'matricula';
protected $fillable = [
  'matricula','nombre','apellidos','direccion','imagen','fecha_nacimiento','sexo','tutor','codigo_de_curso'
];
}
