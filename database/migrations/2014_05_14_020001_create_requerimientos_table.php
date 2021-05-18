<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequerimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requerimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string("descripcion")->nullable();
            $table->integer("interno")->nullable();
            /*$table->string("media")->nullable();*/
            $table->timestamps();

            $table->integer('id_users')->nullable();
            $table->foreign('id_users')->references('id')->on('users');

            $table->integer('id_tiporeq');
            $table->foreign('id_tiporeq')->references('id')->on('tipo-requerimientos');

            $table->integer('id_departamento');
            $table->foreign('id_departamento')->references('id')->on('departamentos');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requerimientos');
    }
}
