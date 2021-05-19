<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoRequerimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo-requerimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('cod',7)->unique();
            $table->string('tipo_requerimiento');
            $table->timestamps();

            $table->integer('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiporequerimientos');
    }
}
