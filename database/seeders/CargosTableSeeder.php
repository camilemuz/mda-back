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

        ]);

        DB::table( 'cargos' )->insert([
            'cod'=>'C2JDPTO',
            'cargo'=>'Jefatura de Departamento',

        ]);

        DB::table( 'cargos' )->insert([
            'cod'=>'C3JDIVI',
            'cargo'=>'Jefatura de División',

        ]);
        DB::table( 'cargos' )->insert([
            'cod'=>'C4SUPER',
            'cargo'=>'Supervisor',

        ]);
        DB::table( 'cargos' )->insert([
            'cod'=>'C5OFICI',
            'cargo'=>'Oficial',

        ]);
        DB::table( 'cargos' )->insert([
            'cod'=>'C6AYUDA',
            'cargo'=>'Ayudante',

        ]);
    }
}
