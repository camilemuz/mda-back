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
            'tiporeq'=>'El equipo No inicia',
            'id_categoria'=>'1',
            'id_division'=>'1'

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA2',
            'tiporeq'=>'Se reinicia',
            'id_categoria'=>'1',
            'id_division'=>'1'

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA3',
            'tiporeq'=>'Configuración',
            'id_categoria'=>'1',
            'id_division'=>'1',

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA4',
            'tiporeq'=>'Mensaje de error',
            'id_categoria'=>'1',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA5',
            'tiporeq'=>'Virus',
            'id_categoria'=>'1',
            'id_division'=>'1',

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA6',
            'tiporeq'=>'Bloqueo/lentitud',
            'id_categoria'=>'1',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA7',
            'tiporeq'=>'Archivos perdidos',
            'id_categoria'=>'1',
            'id_division'=>'1',

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA8',
            'tiporeq'=>'Conexión a la RED',
            'id_categoria'=>'1',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA9',
            'tiporeq'=>'Impresora',
            'id_categoria'=>'1',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA10',
            'tiporeq'=>'Internet',
            'id_categoria'=>'1',
            'id_division'=>'1',

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA11',
            'tiporeq'=>'Correo',
            'id_categoria'=>'1',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA12',
            'tiporeq'=>'Interno',
            'id_categoria'=>'1',
            'id_division'=>'1',

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA13',
            'tiporeq'=>'Biométrico',
            'id_categoria'=>'1',
            'id_division'=>'2',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TA14',
            'tiporeq'=>'Otro',
            'id_categoria'=>'1',
            'id_division'=>'1',

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM1',
            'tiporeq'=>'Computadora',
            'id_categoria'=>'2',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM2',
            'tiporeq'=>'Impresora',
            'id_categoria'=>'2',
            'id_division'=>'1',

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM3',
            'tiporeq'=>'Scanner',
            'id_categoria'=>'2',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM4',
            'tiporeq'=>'Teclado',
            'id_categoria'=>'2',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM5',
            'tiporeq'=>'Mouse',
            'id_categoria'=>'2',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM6',
            'tiporeq'=>'Monitor',
            'id_categoria'=>'2',
            'id_division'=>'1',

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM7',
            'tiporeq'=>'Unidad CD/DVD',
            'id_categoria'=>'2',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM8',
            'tiporeq'=>'Unidad CD/DVD',
            'id_categoria'=>'2',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM9',
            'tiporeq'=>'POS',
            'id_categoria'=>'2',
            'id_division'=>'5',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM10',
            'tiporeq'=>'Sonido',
            'id_categoria'=>'2',
            'id_division'=>'1',

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM11',
            'tiporeq'=>'Impresora Termica',
            'id_categoria'=>'2',
            'id_division'=>'5',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TM12',
            'tiporeq'=>'Otros',
            'id_categoria'=>'2',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI1',
            'tiporeq'=>'Todo (Completo)',
            'id_categoria'=>'3',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI2',
            'tiporeq'=>'Sistema Operativo',
            'id_categoria'=>'3',
            'id_division'=>'1',

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI3',
            'tiporeq'=>'Drivers',
            'id_categoria'=>'3',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI4',
            'tiporeq'=>'Lector de PDF',
            'id_categoria'=>'3',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI5',
            'tiporeq'=>'Quemador CD/DVD',
            'id_categoria'=>'3',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI6',
            'tiporeq'=>'Office',
            'id_categoria'=>'3',
            'id_division'=>'1',

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI7',
            'tiporeq'=>'Genesys',
            'id_categoria'=>'3',
            'id_division'=>'4',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI8',
            'tiporeq'=>'SAR',
            'id_categoria'=>'3',
            'id_division'=>'2',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI9',
            'tiporeq'=>'SAP',
            'id_categoria'=>'3',
            'id_division'=>'3',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI10',
            'tiporeq'=>'Cronos',
            'id_categoria'=>'3',
            'id_division'=>'5',

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TI11',
            'tiporeq'=>'Otros',
            'id_categoria'=>'3',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TC1',
            'tiporeq'=>'Medio Físico (DVD/USB)',
            'id_categoria'=>'4',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TC2',
            'tiporeq'=>'Otro Computador',
            'id_categoria'=>'4',
            'id_division'=>'1',

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TC3',
            'tiporeq'=>'Documentos',
            'id_categoria'=>'4',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TC4',
            'tiporeq'=>'Correo',
            'id_categoria'=>'4',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TC5',
            'tiporeq'=>'Otro',
            'id_categoria'=>'4',
            'id_division'=>'1',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS1',
            'tiporeq'=>'Soporte GENESYS',
            'id_categoria'=>'5',
            'id_division'=>'4',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS2',
            'tiporeq'=>'Reportes/Listados GENESYS',
            'id_categoria'=>'5',
            'id_division'=>'4',

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS3',
            'tiporeq'=>'Soporte SAP',
            'id_categoria'=>'5',
            'id_division'=>'3',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS4',
            'tiporeq'=>'Reportes/Listados SAP',
            'id_categoria'=>'5',
            'id_division'=>'3',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS5',
            'tiporeq'=>'Soporte SAR',
            'id_categoria'=>'5',
            'id_division'=>'2',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS6',
            'tiporeq'=>'Reportes/Listados SAR',
            'id_categoria'=>'2',
            'id_division'=>'2',

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS7',
            'tiporeq'=>'Soporte Otros',
            'id_categoria'=>'5',
            'id_division'=>'2',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS8',
            'tiporeq'=>'Reportes/Listados Otros',
            'id_categoria'=>'5',
            'id_division'=>'2',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS9',
            'tiporeq'=>'Sistema Laboratorio',
            'id_categoria'=>'5',
            'id_division'=>'5',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS10',
            'tiporeq'=>'SIDOT',
            'id_categoria'=>'5',
            'id_division'=>'5',

        ]);

        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS11',
            'tiporeq'=>'Local',
            'id_categoria'=>'5',
            'id_division'=>'2',

        ]);
        DB::table( 'tiporequerimientos' )->insert([
            'cod'=>'TS12',
            'tiporeq'=>'Pistón',
            'id_categoria'=>'5',
            'id_division'=>'5',

        ]);
    }
}
