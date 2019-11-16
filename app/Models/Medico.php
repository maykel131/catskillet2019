<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = "medico";
    public $primaryKey = "id_medico";
   
    protected $fillable = ['id_especialidade','nome','celular','descricao','nome_foto','nome_foto_criado','rota_foto'];
    public $timestamps = true;
}
