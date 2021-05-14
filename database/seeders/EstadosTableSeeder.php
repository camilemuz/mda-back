<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'estados' )->insert([
            'cod'=>'e1esp',
            'estado'=>'En Espera',

        ]);

        DB::table( 'estados' )->insert([
            'cod'=>'e2pro',
            'estado'=>'En Proceso',

        ]);

        DB::table( 'estados' )->insert([
            'cod'=>'e3cer',
            'estado'=>'Cerrado',

        ]);
    }
}
