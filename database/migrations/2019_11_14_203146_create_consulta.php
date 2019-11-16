<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsulta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta', function (Blueprint $table) {
            $table->bigIncrements('id_consulta');
            $table->bigInteger('id_especialidade')->unsigned()->nullable();
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->timestamps();
        });

        Schema::table('consulta', function($table) {
            $table->foreign('id_especialidade')->references('id_especialidade')->on('especialidade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('consulta');
    }
}
