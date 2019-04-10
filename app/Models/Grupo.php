<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
protected $table ='grupos';
protected $primaryKey='cod_grupo'
protected $fillable = [
'cod_grupo','curso','modalidad'
];
}
