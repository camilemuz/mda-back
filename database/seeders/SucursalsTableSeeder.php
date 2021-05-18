<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SucursalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'sucursals' )->insert([
            'cod'=>'S1VF',
            'sucursal'=>'Villa Fátima',
            'id_municipio'=>'1'

        ]);

        DB::table( 'sucursals' )->insert([
            'cod'=>'S2SJ',
            'sucursal'=>'San Jorge',
            'id_municipio'=>'1'

        ]);
        DB::table( 'sucursals' )->insert([
            'cod'=>'S3ZS',
            'sucursal'=>'Zona Sur',
            'id_municipio'=>'1'

        ]);

        DB::table( 'sucursals' )->insert([
            'cod'=>'S4CO',
            'sucursal'=>'Colorados',
            'id_municipio'=>'1'

        ]);
        DB::table( 'sucursals' )->insert([
            'cod'=>'S516J',
            'sucursal'=>'16 de Julio',
            'id_municipio'=>'2'

        ]);

        DB::table( 'sucursals' )->insert([
            'cod'=>'S6VB',
            'sucursal'=>'Villa Bolívar',
            'id_municipio'=>'2'

        ]);
        DB::table( 'sucursals' )->insert([
            'cod'=>'S7PJ',
            'sucursal'=>'Pacajes',
            'id_municipio'=>'2'

        ]);

        DB::table( 'sucursals' )->insert([
            'cod'=>'S8SNK',
            'sucursal'=>'Senkata',
            'id_municipio'=>'2'

        ]);
        DB::table( 'sucursals' )->insert([
            'cod'=>'S9SR',
            'sucursal'=>'San Roque',
            'id_municipio'=>'2'

        ]);
    }
}
