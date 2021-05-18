<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketPrioridadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket-prioridads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('id_ticket')->nullable();
            $table->foreign('id_ticket')->references('id')->on('tickets');

            $table->integer('id_prioridad')->nullable();
            $table->foreign('id_prioridad')->references('id')->on('prioridads');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket-prioridads');
    }
}
