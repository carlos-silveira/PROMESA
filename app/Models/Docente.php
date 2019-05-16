<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
protected $table = 'docentes';
protected $primaryKey='codigo_de_maestro';
protected $fillable=['codigo_de_maestro','nombre','apellidos','especialidad','telefono','fecha_de_nacimiento',
'direccion','email'
];
}
