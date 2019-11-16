<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medico', function (Blueprint $table) {
            $table->bigIncrements('id_medico');
            $table->bigInteger('id_especialidade')->unsigned();
            $table->string('nome');
            $table->string('celular');
            $table->text('descricao')->nullable();
            $table->string('nome_foto')->nullable(); //nome original da foto
            $table->string('nome_foto_criado')->nullable();
            $table->string('rota_foto')->nullable();
            $table->timestamps();
        });

        Schema::table('medico', function($table) {
            $table->foreign('id_especialidade')->references('id_especialidade')->on('especialidade');
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('medico');
    }
}
