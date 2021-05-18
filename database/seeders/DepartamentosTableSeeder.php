<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'departamentos' )->insert([
            'cod'=>'D1COM',
            'departamento'=>'Comunicación',

        ]);

        DB::table( 'departamentos' )->insert([
            'cod'=>'D2SIS',
            'departamento'=>'Sistemas',

        ]);

        DB::table( 'departamentos' )->insert([
            'cod'=>'D3ADM',
            'departamento'=>'Administración',

        ]);
        DB::table( 'departamentos' )->insert([
            'cod'=>'D4LEG    ',
            'departamento'=>'legal',

        ]);
        DB::table( 'departamentos' )->insert([
            'cod'=>'D5CAT',
            'departamento'=>'Catastro',

        ]);
        DB::table( 'departamentos' )->insert([
            'cod'=>'D6AMB',
            'departamento'=>'Ambiental',

        ]);
    }
}
