<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalificacionTicketsUsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'calificacion-tickets-usuarios' )->insert([
            'id_ticket'=>'1',
            'id_calificacion'=>'5',
            'id_user'=>'1',
        ]);
        DB::table( 'calificacion-tickets-usuarios' )->insert([
            'id_ticket'=>'2',
            'id_calificacion'=>'4',
            'id_user'=>'1',
        ]);
        DB::table( 'calificacion-tickets-usuarios' )->insert([
            'id_ticket'=>'1',
            'id_calificacion'=>'3',
            'id_user'=>'2',
        ]);
    }
}
