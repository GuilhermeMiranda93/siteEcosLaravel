<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_texto', function (Blueprint $table) {
            $table->increments('id_texto');
            $table->string('titulo',255);
            $table->string('slug',255);
            $table->text('descricao')->nullable();
            $table->string('url',255)->nullable();
            $table->string('url_target',255)->nullable();
            $table->string('imagem',255)->nullable();
            $table->text('texto');
            $table->integer('localizacao')->default(0);
            $table->integer('destaque')->default(1);
            $table->integer('galeria')->default(0);
            $table->dateTime('data')->default(null);
            $table->integer('posicao')->default(0);
            $table->integer('ativo')->default(1);
            $table->integer('excluido')->default(0);
            $table->integer('categoria_1')->nullable();
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
        Schema::dropIfExists('tb_texto');
    }
}
