<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReqTicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'req-tickets' )->insert([
            'id_req'=>'1',
            'id_ticket'=>'1',
        ]);
        DB::table( 'req-tickets' )->insert([
            'id_req'=>'2',
            'id_ticket'=>'2',
        ]);
        DB::table( 'req-tickets' )->insert([
        'id_req'=>'3',
        'id_ticket'=>'3',


    ]);
    }
}
