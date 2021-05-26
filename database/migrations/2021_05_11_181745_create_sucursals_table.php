<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD:database/migrations/2021_05_11_180000_create_municipios_table.php
class CreateMunicipiosTable extends Migration
=======
class CreateSucursalsTable extends Migration
>>>>>>> 1b82f9ae6bf3cc6ed549403495b7125d233165cb:database/migrations/2021_05_11_181745_create_sucursals_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2021_05_11_180000_create_municipios_table.php
        Schema::create('municipios', function (Blueprint $table) {
            $table->char('id',5)->primary();
            $table->string('nombre_municipio');
=======
        Schema::create('sucursals', function (Blueprint $table) {
            $table->id();
>>>>>>> 1b82f9ae6bf3cc6ed549403495b7125d233165cb:database/migrations/2021_05_11_181745_create_sucursals_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD:database/migrations/2021_05_11_180000_create_municipios_table.php
        Schema::dropIfExists('municipios');
=======
        Schema::dropIfExists('sucursals');
>>>>>>> 1b82f9ae6bf3cc6ed549403495b7125d233165cb:database/migrations/2021_05_11_181745_create_sucursals_table.php
    }
}
