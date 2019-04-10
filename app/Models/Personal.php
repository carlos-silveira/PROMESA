<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
protected $table='personal';
protected $primaryKey='codigo_personal';
protected $filable=['codigo_personal','nombre','apellidos','direccion','fecha-nacimiento',
'grado_de_estudio','cargo','fecha_de_inicio','antiguedad'.'curp'
];
}
