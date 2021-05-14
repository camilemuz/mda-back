<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiporequerimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiporequerimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('cod',7)->unique();
            $table->string('sub_categoria');
            $table->timestamps();

            $table->integer('id_categorias');
            $table->foreign('id_categorias')->references('id')->on('categorias');
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
