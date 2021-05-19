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
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TA1',
            'tipo_requerimiento'=>'El equipo No inicia',
            'id_categoria'=>'1'

        ]);

        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TA2',
            'tipo_requerimiento'=>'Se reinicia',
            'id_categoria'=>'1'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TA3',
            'tipo_requerimiento'=>'Configuración',
            'id_categoria'=>'1'

        ]);

        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TA4',
            'tipo_requerimiento'=>'Mensaje de error',
            'id_categoria'=>'1'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TA5',
            'tipo_requerimiento'=>'Virus',
            'id_categoria'=>'1'

        ]);

        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TA6',
            'tipo_requerimiento'=>'Bloqueo/lentitud',
            'id_categoria'=>'1'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TA7',
            'tipo_requerimiento'=>'Archivos perdidos',
            'id_categoria'=>'1'

        ]);

        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TA8',
            'tipo_requerimiento'=>'Conexión a la RED',
            'id_categoria'=>'1'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TA9',
            'tipo_requerimiento'=>'Impresora',
            'id_categoria'=>'1'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TA10',
            'tipo_requerimiento'=>'Internet',
            'id_categoria'=>'1'

        ]);

        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TA11',
            'tipo_requerimiento'=>'Correo',
            'id_categoria'=>'1'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TA12',
            'tipo_requerimiento'=>'Interno',
            'id_categoria'=>'1'

        ]);

        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TA13',
            'tipo_requerimiento'=>'Biométrico',
            'id_categoria'=>'1'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TA14',
            'tipo_requerimiento'=>'Otro',
            'id_categoria'=>'1'

        ]);

        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TM1',
            'tipo_requerimiento'=>'Computadora',
            'id_categoria'=>'2'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TM2',
            'tipo_requerimiento'=>'Impresora',
            'id_categoria'=>'2'

        ]);

        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TM3',
            'tipo_requerimiento'=>'Scanner',
            'id_categoria'=>'2'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TM4',
            'tipo_requerimiento'=>'Teclado',
            'id_categoria'=>'2'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TM5',
            'tipo_requerimiento'=>'Mouse',
            'id_categoria'=>'2'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TM6',
            'tipo_requerimiento'=>'Monitor',
            'id_categoria'=>'2'

        ]);

        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TM7',
            'tipo_requerimiento'=>'Unidad CD/DVD',
            'id_categoria'=>'2'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TM8',
            'tipo_requerimiento'=>'Unidad CD/DVD',
            'id_categoria'=>'2'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TM9',
            'tipo_requerimiento'=>'POS',
            'id_categoria'=>'2'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TM10',
            'tipo_requerimiento'=>'Sonido',
            'id_categoria'=>'2'

        ]);

        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TM11',
            'tipo_requerimiento'=>'Impresora Termica',
            'id_categoria'=>'2'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TM12',
            'tipo_requerimiento'=>'Otros',
            'id_categoria'=>'2'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TI1',
            'tipo_requerimiento'=>'Todo (Completo)',
            'id_categoria'=>'3'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TI2',
            'tipo_requerimiento'=>'Sistema Operativo',
            'id_categoria'=>'3'

        ]);

        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TI3',
            'tipo_requerimiento'=>'Drivers',
            'id_categoria'=>'3'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TI4',
            'tipo_requerimiento'=>'Lector de PDF',
            'id_categoria'=>'3'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TI5',
            'tipo_requerimiento'=>'Quemador CD/DVD',
            'id_categoria'=>'3'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TI6',
            'tipo_requerimiento'=>'Office',
            'id_categoria'=>'3'

        ]);

        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TI7',
            'tipo_requerimiento'=>'Genesys',
            'id_categoria'=>'3'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TI8',
            'tipo_requerimiento'=>'SAR',
            'id_categoria'=>'3'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TI9',
            'tipo_requerimiento'=>'SAP',
            'id_categoria'=>'3'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TI10',
            'tipo_requerimiento'=>'Cronos',
            'id_categoria'=>'3'

        ]);

        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TI11',
            'tipo_requerimiento'=>'Otros',
            'id_categoria'=>'3'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TC1',
            'tipo_requerimiento'=>'Medio Físico (DVD/USB)',
            'id_categoria'=>'4'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TC2',
            'tipo_requerimiento'=>'Otro Computador',
            'id_categoria'=>'4'

        ]);

        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TC3',
            'tipo_requerimiento'=>'Documentos',
            'id_categoria'=>'4'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TC4',
            'tipo_requerimiento'=>'Correo',
            'id_categoria'=>'4'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TC5',
            'tipo_requerimiento'=>'Otro',
            'id_categoria'=>'4'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TS1',
            'tipo_requerimiento'=>'Soporte GENESYS',
            'id_categoria'=>'5'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TS2',
            'tipo_requerimiento'=>'Reportes/Listados GENESYS',
            'id_categoria'=>'5'

        ]);

        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TS3',
            'tipo_requerimiento'=>'Soporte SAP',
            'id_categoria'=>'5'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TS4',
            'tipo_requerimiento'=>'Reportes/Listados SAP',
            'id_categoria'=>'5'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TS5',
            'tipo_requerimiento'=>'Soporte SAR',
            'id_categoria'=>'5'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TS6',
            'tipo_requerimiento'=>'Reportes/Listados SAR',
            'id_categoria'=>'2'

        ]);

        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TS7',
            'tipo_requerimiento'=>'Soporte Otros',
            'id_categoria'=>'5'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TS8',
            'tipo_requerimiento'=>'Reportes/Listados Otros',
            'id_categoria'=>'5'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TS9',
            'tipo_requerimiento'=>'Sistema Laboratorio',
            'id_categoria'=>'5'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TS10',
            'tipo_requerimiento'=>'SIDOT',
            'id_categoria'=>'5'

        ]);

        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TS11',
            'tipo_requerimiento'=>'Local',
            'id_categoria'=>'5'

        ]);
        DB::table( 'tipo-requerimientos' )->insert([
            'cod'=>'TS12',
            'tipo_requerimiento'=>'Pistón',
            'id_categoria'=>'5'

        ]);
    }
}
