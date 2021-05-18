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
            'cod'=>'M1LPZ',
            'municipio'=>'La Paz',

        ]);

        DB::table( 'municipios' )->insert([
            'cod'=>'M2EA',
            'municipio'=>'El Alto',

        ]);

    }
}
