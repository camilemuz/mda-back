<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asignado');
            $table->timestamps();

            $table->integer('id_ticket');
            $table->foreign('id_ticket')->references('id')->on('tickets');

            $table->integer('id_user');
            $table->foreign('id_user')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignados');
    }
}
