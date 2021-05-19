<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'roles' )->insert([
            'cod'=>'R1',
            'rol'=>'Administrador',

        ]);
        DB::table( 'roles' )->insert([
            'cod'=>'R2',
            'rol'=>'Agente',

        ]);
        DB::table( 'roles' )->insert([
            'cod'=>'R3',
            'rol'=>'Funcionario',

        ]);
    }
}
