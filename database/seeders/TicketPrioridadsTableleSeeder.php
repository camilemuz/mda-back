<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketPrioridadsTableleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'ticket-prioridads' )->insert([
            'id_ticket'=>'1',
            'id_ticket'=>'1',

        ]);

        DB::table( 'ticket-prioridads' )->insert([
            'id_ticket'=>'2',
            'id_ticket'=>'2',

        ]);

        DB::table( 'ticket-prioridads' )->insert([
            'id_ticket'=>'3',
            'id_ticket'=>'3',

        ]);
    }
}
