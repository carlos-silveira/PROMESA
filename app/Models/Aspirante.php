<?php
// -------------------------------------
// -            Aspirantes             -
// -------------------------------------
// -Codigo de ficha     --- Autonumeric-
// -------------------------------------
// -Nombre              --- Texto      -
// -------------------------------------
// -Apellido            --- Texto      -
// -------------------------------------
// -Direccion           --- Texto      -
// -------------------------------------
// -Fecha nacimiento    --- Texto      -
// -------------------------------------
// -Sexo                --- Texto      -
// -------------------------------------
// -Tutor               --- Texto      -
// -------------------------------------
// -Codigo curso        --- Texto      -
// -------------------------------------
// -Fecha matricula     --- Texto      -
// -------------------------------------
// -Status              --- Texto      -
// -------------------------------------

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspirante extends Model
{
  protected $table ='aspirantes';
  protected $primaryKey ='codigo_de_ficha';
protected $fillable = [
  'codigo_de_ficha','nombre','apellidos','direccion','fecha_nacimiento',
  'sexo'.'tutor'.'codigo_de_curso','fecha_matricula','status'

];
}
