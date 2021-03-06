<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table( 'users' )->insert([
            'nombre'=>'Prueba',
            'ap_paterno'=>'Prueba',
            'ap_materno'=>'Prueba',
            'email'  =>  'prueba@epsas.com' ,
            'password'  =>  Hash::make( '12345678' ),
            'rol'=>'ADMIN',

        ]);
    }
}
