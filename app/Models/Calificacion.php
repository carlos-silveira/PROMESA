<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
protected $table ='calificacion';
protected $primaryKey = 'codigo_materia';
protected $fillable =[ 'codigo_materia','codigo_curso','anio'.'p1','p2'.'p3','p4','promedio'
];
}
