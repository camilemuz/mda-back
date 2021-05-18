<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion-tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('id_ticket')->nullable();
            $table->foreign('id_ticket')->references('id')->on('tickets');

            $table->integer('id_calificacion')->nullable();
            $table->foreign('id_calificacion')->references('id')->on('calificacions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificacion-tickets');
    }
}
