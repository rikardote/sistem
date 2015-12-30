<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DeparmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deparments')->insert([
        	'code' => '52',
        	'description' => 'OFICINA DEL C. DELEGADO',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),

        ]);
        DB::table('deparments')->insert([
        	'code' => '53',
        	'description' => 'SUBDELEGACION MEDICA',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('deparments')->insert([
        	'code' => '54',
        	'description' => 'HOSPITAL GENERAL 5 DE DICIEMBRE',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('deparments')->insert([
        	'code' => '55',
        	'description' => 'HOSPITAL GENERAL FRAY JUNIPERO',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('deparments')->insert([
        	'code' => '56',
        	'description' => 'CLINICA HOSPITAL ENSENADA',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('deparments')->insert([
        	'code' => '74',
        	'description' => 'SUBDELEGACION DE PRESTACIONES',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('deparments')->insert([
        	'code' => '105',
        	'description' => 'SUBDELEGACION DE ADMINISTRACION',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
