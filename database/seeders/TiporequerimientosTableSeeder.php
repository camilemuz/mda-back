<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiporequerimientosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA1',
            'sub_categoria'=>'El equipo No inicia',
            'id_categorias'=>'1'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA2',
            'sub_categoria'=>'Se reinicia',
            'id_categorias'=>'1'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA3',
            'sub_categoria'=>'Configuración',
            'id_categorias'=>'1'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA4',
            'sub_categoria'=>'Mensaje de error',
            'id_categorias'=>'1'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA5',
            'sub_categoria'=>'Virus',
            'id_categorias'=>'1'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA6',
            'sub_categoria'=>'Bloqueo/lentitud',
            'id_categorias'=>'1'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA7',
            'sub_categoria'=>'Archivos perdidos',
            'id_categorias'=>'1'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA8',
            'sub_categoria'=>'Conexión a la RED',
            'id_categorias'=>'1'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA9',
            'sub_categoria'=>'Impresora',
            'id_categorias'=>'1'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA10',
            'sub_categoria'=>'Internet',
            'id_categorias'=>'1'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA11',
            'sub_categoria'=>'Correo',
            'id_categorias'=>'1'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA12',
            'sub_categoria'=>'Interno',
            'id_categorias'=>'1'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA13',
            'sub_categoria'=>'Biométrico',
            'id_categorias'=>'1'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA14',
            'sub_categoria'=>'Otro',
            'id_categorias'=>'1'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM1',
            'sub_categoria'=>'Computadora',
            'id_categorias'=>'2'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM2',
            'sub_categoria'=>'Impresora',
            'id_categorias'=>'2'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM3',
            'sub_categoria'=>'Scanner',
            'id_categorias'=>'2'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM4',
            'sub_categoria'=>'Teclado',
            'id_categorias'=>'2'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM5',
            'sub_categoria'=>'Mouse',
            'id_categorias'=>'2'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM6',
            'sub_categoria'=>'Monitor',
            'id_categorias'=>'2'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM7',
            'sub_categoria'=>'Unidad CD/DVD',
            'id_categorias'=>'2'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM8',
            'sub_categoria'=>'Unidad CD/DVD',
            'id_categorias'=>'2'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM9',
            'sub_categoria'=>'POS',
            'id_categorias'=>'2'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM10',
            'sub_categoria'=>'Sonido',
            'id_categorias'=>'2'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM11',
            'sub_categoria'=>'Impresora Termica',
            'id_categorias'=>'2'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM12',
            'sub_categoria'=>'Otros',
            'id_categorias'=>'2'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI1',
            'sub_categoria'=>'Todo (Completo)',
            'id_categorias'=>'3'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI2',
            'sub_categoria'=>'Sistema Operativo',
            'id_categorias'=>'3'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI3',
            'sub_categoria'=>'Drivers',
            'id_categorias'=>'3'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI4',
            'sub_categoria'=>'Lector de PDF',
            'id_categorias'=>'3'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI5',
            'sub_categoria'=>'Quemador CD/DVD',
            'id_categorias'=>'3'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI6',
            'sub_categoria'=>'Office',
            'id_categorias'=>'3'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI7',
            'sub_categoria'=>'Genesys',
            'id_categorias'=>'3'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI8',
            'sub_categoria'=>'SAR',
            'id_categorias'=>'3'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI9',
            'sub_categoria'=>'SAP',
            'id_categorias'=>'3'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI10',
            'sub_categoria'=>'Cronos',
            'id_categorias'=>'3'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI11',
            'sub_categoria'=>'Otros',
            'id_categorias'=>'3'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TC1',
            'sub_categoria'=>'Medio Físico (DVD/USB)',
            'id_categorias'=>'4'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TC2',
            'sub_categoria'=>'Otro Computador',
            'id_categorias'=>'4'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TC3',
            'sub_categoria'=>'Documentos',
            'id_categorias'=>'4'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TC4',
            'sub_categoria'=>'Correo',
            'id_categorias'=>'4'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TC5',
            'sub_categoria'=>'Otro',
            'id_categorias'=>'4'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS1',
            'sub_categoria'=>'Soporte GENESYS',
            'id_categorias'=>'5'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS2',
            'sub_categoria'=>'Reportes/Listados GENESYS',
            'id_categorias'=>'5'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS3',
            'sub_categoria'=>'Soporte SAP',
            'id_categorias'=>'5'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS4',
            'sub_categoria'=>'Reportes/Listados SAP',
            'id_categorias'=>'5'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS5',
            'sub_categoria'=>'Soporte SAR',
            'id_categorias'=>'5'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS6',
            'sub_categoria'=>'Reportes/Listados SAR',
            'id_categorias'=>'2'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS7',
            'sub_categoria'=>'Soporte Otros',
            'id_categorias'=>'5'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS8',
            'sub_categoria'=>'Reportes/Listados Otros',
            'id_categorias'=>'5'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS9',
            'sub_categoria'=>'Sistema Laboratorio',
            'id_categorias'=>'5'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS10',
            'sub_categoria'=>'SIDOT',
            'id_categorias'=>'5'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS11',
            'sub_categoria'=>'Local',
            'id_categorias'=>'5'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS12',
            'sub_categoria'=>'Pistón',
            'id_categorias'=>'5'

        ]);
    }
}
