<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especialide extends Model
{
    protected $table = "especialidade";
    public $primaryKey = "id_especialidade";
   
    protected $fillable = ['nome_especialidade','descricao'];
    public $timestamps = true;
}
