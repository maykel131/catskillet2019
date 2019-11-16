<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = "consulta";
    public $primaryKey = "id_consulta";
   
    protected $fillable = ['id_especialidade','nome','email','telefone'];
    public $timestamps = true;
}
