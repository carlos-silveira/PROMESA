<?php

namespace App\Models;
// -------------------------------------
// -            Calificaciones         -
// -------------------------------------
// -Codigo materia      --- Texto      -
// -------------------------------------
// -Codigo curso        --- Texto      -
// -------------------------------------
// -Year                --- Texto      -
// -------------------------------------
// -P1                  --- Numeric    -
// -------------------------------------
// -P2                  --- Numeric    -
// -------------------------------------
// -P3                  --- Numeric    -
// -------------------------------------
// -P4                  --- Numeric    -
// -------------------------------------
// -Promedio            --- Numeric    -
// -------------------------------------

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
  protected $table ='calificacion';
  protected $primaryKey = 'codigo_materia';
  protected $fillable =[ 'codigo_materia','codigo_curso','anio'.'p1','p2'.'p3','p4','promedio'

  ];
    //
}
