<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalificacionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'calificacions' )->insert([
            'cod'=>'q1',
            'calificacion'=>'Muy Mala',

        ]);

        DB::table( 'calificacions' )->insert([
            'cod'=>'q2',
            'calificacion'=>'Mala',

        ]);

        DB::table( 'calificacions' )->insert([
            'cod'=>'q3',
            'calificacion'=>'Regular',

        ]);
        DB::table( 'calificacions' )->insert([
            'cod'=>'q4',
            'calificacion'=>'Buena',

        ]);

        DB::table( 'calificacions' )->insert([
            'cod'=>'q5',
            'calificacion'=>'Muy Buena',

        ]);
    }
}
