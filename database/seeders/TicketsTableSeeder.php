<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'tickets' )->insert([
            'numero'=>'1',
            'comentarios'=>'Se le asigno un nuevo cable de red',
            'id_estado'=>'3',
            'id_req'=>'1',


        ]);

        DB::table( 'tickets' )->insert([
            'numero'=>'2',
            'comentarios'=>'Se cambió el cartucho de la impresora',
            'id_estado'=>'2',
            'id_req'=>'2',


        ]);
        DB::table( 'tickets' )->insert([
            'numero'=>'3',
            'comentarios'=>'tercer ticket',
            'id_estado'=>'1',
            'id_req'=>'3',


        ]);
    }
}
