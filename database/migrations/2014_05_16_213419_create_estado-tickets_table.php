<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado-tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('id_estado');
            $table->foreign('id_estado')->references('id')->on('estados');

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
        Schema::dropIfExists('estado-tickets');
    }
}
