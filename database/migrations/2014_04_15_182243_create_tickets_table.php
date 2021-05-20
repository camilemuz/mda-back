<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->char('comentarios');
            $table->timestamps();


            $table->integer('id_estado');
            $table->foreign('id_estado')->references('id')->on('estados');

            $table->integer('id_req');
            $table->foreign('id_req')->references('id')->on('requerimientos');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
