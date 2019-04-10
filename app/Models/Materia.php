<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
protected $table ='materias'
protected $primaryKey
protected $filable=['codigo_materia','materia','codigo_curso','codigo_maestro'
];
}
