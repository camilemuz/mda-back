<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'municipios' )->insert([
            'id'=>'M1LPZ',
            'nombre_municipio'=>'La Paz',

        ]);

        DB::table( 'municipios' )->insert([
            'id'=>'M2EA',
            'nombre_municipio'=>'El Alto',

        ]);

    }
}
