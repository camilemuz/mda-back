<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequerimientosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'requerimientos' )->insert([
            'descripcion'=>'Computadora con virus',
            'interno'=>'1045',
            'id_users'=>'1',
            'id_tiporeq'=>'5',
            'id_departamento'=>'2',

        ]);
        DB::table( 'requerimientos' )->insert([
            'descripcion'=>'Impresora impreme con manchas',
            'interno'=>'1321',
            'id_users'=>'2',
            'id_tiporeq'=>'9',
            'id_departamento'=>'3',

        ]);
        DB::table( 'requerimientos' )->insert([
            'descripcion'=>'El interno no tiene línea',
            'interno'=>'1323',
            'id_users'=>'1',
            'id_tiporeq'=>'12',
            'id_departamento'=>'2',

        ]);
    }
}
