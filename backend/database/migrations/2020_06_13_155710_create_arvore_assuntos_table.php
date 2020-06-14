<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArvoreAssuntosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_arvore_assunto', function (Blueprint $table) {
            $table->id('id_arvore_assunto');
            $table->unsignedBigInteger('id_assunto_pai')->foreign('id_assunto_pai')->references('id_assunto')->on('tb_assunto');
            $table->unsignedBigInteger('id_assunto_filho')->foreign('id_assunto_filho')->references('id_assunto')->on('tb_assunto');
            $table->unique('id_assunto_filho');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_arvore_assunto');
    }
}
