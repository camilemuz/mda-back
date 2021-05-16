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
            'id_users'=>'2',
            'id_tiporeq'=>'1',
            'id_calificacion'=>'5',
            'id_prioridad'=>'1',
            'id_departamento'=>'2',
            'id_estado'=>'1',
            'fecha_atencion'=>'2021-05-15 02:08:43'

        ]);
    }
}
