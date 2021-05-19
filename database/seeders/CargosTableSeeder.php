<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'cargos' )->insert([
            'cod'=>'C1GEREN',
            'cargo'=>'Gerente',
            'id_prioridad'=>'3',

        ]);

        DB::table( 'cargos' )->insert([
            'cod'=>'C2JDPTO',
            'cargo'=>'Jefatura de Departamento',
            'id_prioridad'=>'3',

        ]);

        DB::table( 'cargos' )->insert([
            'cod'=>'C3JDIVI',
            'cargo'=>'Jefatura de División',
            'id_prioridad'=>'2',

        ]);
        DB::table( 'cargos' )->insert([
            'cod'=>'C4SUPER',
            'cargo'=>'Supervisor',
            'id_prioridad'=>'2',

        ]);
        DB::table( 'cargos' )->insert([
            'cod'=>'C5OFICI',
            'cargo'=>'Oficial',
            'id_prioridad'=>'1',

        ]);
        DB::table( 'cargos' )->insert([
            'cod'=>'C6AYUDA',
            'cargo'=>'Ayudante',
            'id_prioridad'=>'1',

        ]);
    }
}
