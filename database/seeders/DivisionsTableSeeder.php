<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'divisions' )->insert([
            'cod'=>'D1',
            'division'=>'Gerente',

        ]);
        DB::table( 'divisions' )->insert([
            'cod'=>'D2',
            'division'=>'Jefatura de Departamento',

        ]);
        DB::table( 'divisions' )->insert([
            'cod'=>'D3',
            'division'=>'Jefatura de División',

        ]);
        DB::table( 'divisions' )->insert([
            'cod'=>'D4',
            'division'=>'Supervisor',

        ]);
        DB::table( 'divisions' )->insert([
            'cod'=>'D5',
            'division'=>'Oficial',

        ]);
        DB::table( 'divisions' )->insert([
            'cod'=>'D6',
            'division'=>'Ayudante',

        ]);
    }
}
