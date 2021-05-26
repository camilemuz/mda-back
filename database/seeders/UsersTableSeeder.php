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
            'rol'=> 'ADMIN',
            'unidad'=>'Seguridad Informática',
            'password'  =>  Hash::make( '12345678' )


<<<<<<< HEAD
        ]);

        DB::table( 'users' )->insert([
            'nombre'=>'Admin',
            'ap_paterno'=>'Admin',
            'ap_materno'=>'Admin',
            'email'  =>  'admin@epsas.com' ,
            'rol'=> 'ADMIN',
            'unidad'=>'Seguridad Informática',
            'password'  =>  Hash::make( '12345678' )


=======
>>>>>>> 1b82f9ae6bf3cc6ed549403495b7125d233165cb
        ]);
    }
}
