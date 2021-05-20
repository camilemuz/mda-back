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
            'division'=>'Tecnología',

        ]);
        DB::table( 'divisions' )->insert([
            'cod'=>'D2',
            'division'=>'Seguridad Informática',

        ]);
        DB::table( 'divisions' )->insert([
            'cod'=>'D3',
            'division'=>'Aplicaciones Administrativas',

        ]);
        DB::table( 'divisions' )->insert([
            'cod'=>'D4',
            'division'=>'Producción y Control',

        ]);
        DB::table( 'divisions' )->insert([
            'cod'=>'D5',
            'division'=>'Desarrollo',

        ]);
        DB::table( 'divisions' )->insert([
            'cod'=>'D6',
            'division'=>'Otro',

        ]);


    }
}
