<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_questao', function (Blueprint $table) {
            $table->id('id_questao');
            $table->text('ds_questao');
            $table->unsignedBigInteger('id_assunto')->foreign('id_assunto')->references('id_assunto')->on('tb_assunto');
            $table->unsignedBigInteger('id_orgao')->foreign('id_orgao')->references('id_orgao')->on('tb_orgao');
            $table->unsignedBigInteger('id_banca')->foreign('id_banca')->references('id_banca')->on('tb_banca');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_questao');
    }
}
