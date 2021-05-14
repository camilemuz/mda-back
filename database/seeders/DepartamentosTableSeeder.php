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
            'nombre_departamento'=>'Comunicación',

        ]);

        DB::table( 'departamentos' )->insert([
            'cod'=>'D2SIS',
            'nombre_departamento'=>'Sistemas',

        ]);

        DB::table( 'departamentos' )->insert([
            'cod'=>'D3ADM',
            'nombre_departamento'=>'Administración',

        ]);
        DB::table( 'departamentos' )->insert([
            'cod'=>'D4LEG    ',
            'nombre_departamento'=>'legal',

        ]);
        DB::table( 'departamentos' )->insert([
            'cod'=>'D5CAT',
            'nombre_departamento'=>'Catastro',

        ]);
        DB::table( 'departamentos' )->insert([
            'cod'=>'D6AMB',
            'nombre_departamento'=>'Ambiental',

        ]);
    }
}
