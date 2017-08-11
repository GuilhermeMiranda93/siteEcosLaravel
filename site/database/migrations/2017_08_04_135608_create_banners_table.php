<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_banner', function (Blueprint $table) {
            $table->increments('id_banner');
            $table->string('titulo')->nullable();
            $table->string('descricao')->nullable();
            $table->string('url')->nullable();
            $table->string('url_target')->nullable();
            $table->string('imagem',500)->nullable();
            $table->integer('posicao')->default(0);
            $table->integer('ativo')->default(1);
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
        Schema::dropIfExists('tb_banner');
    }
}
