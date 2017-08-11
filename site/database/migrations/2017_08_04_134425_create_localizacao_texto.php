<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalizacaoTexto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_localizacao_texto', function (Blueprint $table) {
            $table->increments('id_localizacao_texto');
            $table->string('nome',255);
            $table->integer('posicao')->default(0);
            $table->integer('excluido')->default(0);
            $table->datetime('data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_localizacao_texto');
    }
}
