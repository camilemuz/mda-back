<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDptosucursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dptosucursals', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('id_sucursal');
            $table->foreign('id_sucursal')->references('id')->on('sucursals');

            $table->integer('id_dpto');
            $table->foreign('id_dpto')->references('id')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dptosucursals');
    }
}
