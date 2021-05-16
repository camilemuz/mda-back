<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'categorias' )->insert([
            'cod'=>'C1ASI',
            'categoria'=>'Asistencia técnica',

        ]);

        DB::table( 'categorias' )->insert([
            'cod'=>'C2MAN',
            'categoria'=>'Mantenimiento',

        ]);

        DB::table( 'categorias' )->insert([
            'cod'=>'C3INS',
            'categoria'=>'Instalación/Reinstalaqción',

        ]);
        DB::table( 'categorias' )->insert([
            'cod'=>'C4COP',
            'categoria'=>'Copias de Seguridad',

        ]);
        DB::table( 'categorias' )->insert([
            'cod'=>'C5SOL',
            'categoria'=>'Solicitudes y Soporte',

        ]);

    }
}
