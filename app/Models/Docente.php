<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
protected $table = 'docentes';
protected $primatyKey='codigo_de_maestro';
protected $filable=['codigo_de_maestro','nombre','apellidos','especialidad','telefono','fecha_de_nacimiento',
'curp','email'
];
}
