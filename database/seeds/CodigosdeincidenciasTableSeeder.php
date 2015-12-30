<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class CodigosdeincidenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
       DB::table('codigos_de_incidencias')->insert([
        	'code' => '1',
        	'description' => 'RETARDO DE 11 A 29 MINUTOS',
        	'grupo' => '1',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),

        ]);
       DB::table('codigos_de_incidencias')->insert([
        	'code' => '7',
        	'description' => 'RETARDO POR CONSULTA MEDICA',
        	'grupo' => '1',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),

        ]);
       DB::table('codigos_de_incidencias')->insert([
        	'code' => '10',
        	'description' => 'FALTA',
        	'grupo' => '1',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),

        ]);
       DB::table('codigos_de_incidencias')->insert([
        	'code' => '41',
        	'description' => 'LICENCIA CON GOCE DE SUELDO',
        	'grupo' => '2',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),

        ]);
       DB::table('codigos_de_incidencias')->insert([
        	'code' => '55',
        	'description' => 'LICENCIA MEDICA',
        	'grupo' => '2',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),

        ]);
       DB::table('codigos_de_incidencias')->insert([
        	'code' => '60',
        	'description' => 'VACACIONES',
        	'grupo' => '3',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),

        ]);
    }
}
