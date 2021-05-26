<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacions', function (Blueprint $table) {
<<<<<<< HEAD
            $table->char('id',5)->primary();
            $table->string('nombre_ubicacion');
            $table->timestamps();

            $table->char('id_sucursal');
            $table->foreign('id_sucursal')->references('id_sucursals')->on('sucursals');
=======
            $table->id();
            $table->timestamps();
>>>>>>> 1b82f9ae6bf3cc6ed549403495b7125d233165cb
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubicacions');
    }
}
