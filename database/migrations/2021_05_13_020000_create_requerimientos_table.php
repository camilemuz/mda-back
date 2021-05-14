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
            $table->increments('id_req');
            $table->string("descripcion");
            $table->dateTime("fecha_atencion");
            $table->timestamps();

            $table->integer('id_users');
            $table->foreign('id_users')->references('id')->on('users');

            $table->char('id_tiporeq');
            $table->foreign('id_tiporeq')->references('id')->on('tiporequerimientos');

            $table->char('id_calificacion');
            $table->foreign('id_calificacion')->references('id')->on('calificacions');

            $table->char('id_prioridad');
            $table->foreign('id_prioridad')->references('id')->on('prioridads');

            $table->char('id_departamento');
            $table->foreign('id_departamento')->references('id')->on('departamentos');

            $table->char('id_estado');
            $table->foreign('id_estado')->references('id')->on('estados');
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
