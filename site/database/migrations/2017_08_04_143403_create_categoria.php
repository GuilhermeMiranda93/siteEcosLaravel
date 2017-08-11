<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_categoria_1', function (Blueprint $table) {
            $table->increments('id_categoria_1');
            $table->string('nome')->nullable();
            $table->string('posicao')->nullable();
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
        Schema::dropIfExists('tb_categoria_1');
    }
}
