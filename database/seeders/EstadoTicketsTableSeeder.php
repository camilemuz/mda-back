<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoTicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'estado-tickets' )->insert([
            'id_estado'=>'1',
            'id_ticket'=>'1',
        ]);
        DB::table( 'estado-tickets' )->insert([
            'id_estado'=>'2',
            'id_ticket'=>'2',
        ]);
        DB::table( 'estado-tickets' )->insert([
            'id_estado'=>'3',
            'id_ticket'=>'3',
        ]);

    }
}
