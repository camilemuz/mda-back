<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrioridadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'prioridads' )->insert([
            'cod'=>'p1',
            'prioridad'=>'Normal',

        ]);

        DB::table( 'prioridads' )->insert([
            'cod'=>'p2',
            'prioridad'=>'Media',

        ]);

        DB::table( 'prioridads' )->insert([
            'cod'=>'p3',
            'prioridad'=>'Alta',

        ]);
    }
}
