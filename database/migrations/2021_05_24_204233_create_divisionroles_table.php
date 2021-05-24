<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionrolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisionroles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('id_rol');
            $table->foreign('id_rol')->references('id')->on('roles');

            $table->integer('id_division');
            $table->foreign('id_division')->references('id')->on('divisions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('divisionrols');
    }
}
