<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReqTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('req-tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('id_req');
            $table->foreign('id_req')->references('id')->on('requerimientos');

            $table->integer('id_ticket');
            $table->foreign('id_ticket')->references('id')->on('tickets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('req-tickets');
    }
}
