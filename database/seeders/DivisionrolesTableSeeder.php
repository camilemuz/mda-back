<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionrolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'divisionroles' )->insert([
            'id_rol'=>'1',
            'id_division'=>'1',

        ]);
        DB::table( 'divisionroles' )->insert([
            'id_rol'=>'2',
            'id_division'=>'2',

        ]);

        DB::table( 'divisionroles' )->insert([
            'id_rol'=>'2',
            'id_division'=>'3',

        ]);
        DB::table( 'divisionroles' )->insert([
            'id_rol'=>'2',
            'id_division'=>'4',

        ]);
        DB::table( 'divisionroles' )->insert([
            'id_rol'=>'2',
            'id_division'=>'5',

        ]);
        DB::table( 'divisionroles' )->insert([
            'id_rol'=>'3',
            'id_division'=>'6',

        ]);
    }
}
