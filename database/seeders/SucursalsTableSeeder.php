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
            'nombre_sucursal'=>'Villa Fátima',
            'id_municipio'=>'1'

        ]);

        DB::table( 'sucursals' )->insert([
            'cod'=>'S2SJ',
            'nombre_sucursal'=>'San Jorge',
            'id_municipio'=>'1'

        ]);
        DB::table( 'sucursals' )->insert([
            'cod'=>'S3ZS',
            'nombre_sucursal'=>'Zona Sur',
            'id_municipio'=>'1'

        ]);

        DB::table( 'sucursals' )->insert([
            'cod'=>'S4CO',
            'nombre_sucursal'=>'Colorados',
            'id_municipio'=>'1'

        ]);
        DB::table( 'sucursals' )->insert([
            'cod'=>'S516J',
            'nombre_sucursal'=>'16 de Julio',
            'id_municipio'=>'2'

        ]);

        DB::table( 'sucursals' )->insert([
            'cod'=>'S6VB',
            'nombre_sucursal'=>'Villa Bolívar',
            'id_municipio'=>'2'

        ]);
        DB::table( 'sucursals' )->insert([
            'cod'=>'S7PJ',
            'nombre_sucursal'=>'Pacajes',
            'id_municipio'=>'2'

        ]);

        DB::table( 'sucursals' )->insert([
            'cod'=>'S8SNK',
            'nombre_sucursal'=>'Senkata',
            'id_municipio'=>'2'

        ]);
        DB::table( 'sucursals' )->insert([
            'cod'=>'S9SR',
            'nombre_sucursal'=>'San Roque',
            'id_municipio'=>'2'

        ]);
    }
}
