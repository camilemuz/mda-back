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
            'id_sucursals'=>'S1VF',
            'nombre_sucursal'=>'Villa Fátima',
            'id_municipios'=>'M1LPZ'

        ]);

        DB::table( 'sucursals' )->insert([
            'id_sucursals'=>'S2SJ',
            'nombre_sucursal'=>'San Jorge',
            'id_municipios'=>'M1LPZ'

        ]);
        DB::table( 'sucursals' )->insert([
            'id_sucursals'=>'S3ZS',
            'nombre_sucursal'=>'Zona Sur',
            'id_municipios'=>'M1LPZ'

        ]);

        DB::table( 'sucursals' )->insert([
            'id_sucursals'=>'S4CO',
            'nombre_sucursal'=>'Colorados',
            'id_municipios'=>'M1LPZ'

        ]);
        DB::table( 'sucursals' )->insert([
            'id_sucursals'=>'S516J',
            'nombre_sucursal'=>'16 de Julio',
            'id_municipios'=>'M2EA'

        ]);

        DB::table( 'sucursals' )->insert([
            'id_sucursals'=>'S6VB',
            'nombre_sucursal'=>'Villa Bolívar',
            'id_municipios'=>'M2EA'

        ]);
        DB::table( 'sucursals' )->insert([
            'id_sucursals'=>'S7PJ',
            'nombre_sucursal'=>'Pacajes',
            'id_municipios'=>'M2EA'

        ]);

        DB::table( 'sucursals' )->insert([
            'id_sucursals'=>'S8SNK',
            'nombre_sucursal'=>'Senkata',
            'id_municipios'=>'M2EA'

        ]);
        DB::table( 'sucursals' )->insert([
            'id_sucursals'=>'S9SR',
            'nombre_sucursal'=>'San Roque',
            'id_municipios'=>'M2EA'

        ]);
    }
}
