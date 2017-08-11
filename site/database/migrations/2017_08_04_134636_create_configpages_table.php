<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_configpages', function (Blueprint $table) {
            $table->increments('id_configpage');
            $table->string('empresa',70)->nullable();
            $table->string('imagem',255)->nullable();
            $table->string('meta_descricao',160)->nullable();
            $table->string('meta_keyword',150)->nullable();
            $table->string('meta_autor',150)->nullable();
            $table->string('meta_robots',10)->default('all');
            $table->string('meta_revisit',11)->default('7');
            $table->integer('excluido')->default(0);
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
        Schema::dropIfExists('tb_configpages');
    }
}
