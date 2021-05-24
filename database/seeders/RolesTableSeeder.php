<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* DB::table( 'roles' )->insert([
            'cod'=>'R1',
            'rol'=>'Administrador',
            'id_division'=>'2',

        ]);
        DB::table( 'roles' )->insert([
            'cod'=>'R2',
            'rol'=>'Agente',
            'id_division'=>'1',

        ]);
        DB::table( 'roles' )->insert([
            'cod'=>'R3',
            'rol'=>'Funcionario',
            'id_division'=>'6',

        ]);*/


        Role::truncate();
        $handle = fopen(base_path('storage/data/rol.csv'), "r");
        while ($csvLine = fgetcsv($handle, 1000, ";")) {
            Role::create([
                "cod" => $csvLine[0],
                "rol" => $csvLine[1],
                /*"id_division"=>$csvLine[2],*/
            ]);
        }



    }
}
