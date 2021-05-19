<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DptosucursalsTableleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'dptosucursals' )->insert([
            'id_sucursal'=>'1',
            'id_dpto'=>'1',

        ]);
        DB::table( 'dptosucursals' )->insert([
            'id_sucursal'=>'2',
            'id_dpto'=>'2',

        ]);
        DB::table( 'dptosucursals' )->insert([
            'id_sucursal'=>'3',
            'id_dpto'=>'3',

        ]);
    }
}
