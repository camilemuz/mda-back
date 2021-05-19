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


        ]);

        DB::table( 'tickets' )->insert([
            'numero'=>'2',


        ]);
        DB::table( 'tickets' )->insert([
            'numero'=>'3',


        ]);
    }
}
