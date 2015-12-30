<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PeriodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodos')->insert([
        	'periodo' => '1',
        	'year' => '2014',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),

        ]);
        DB::table('periodos')->insert([
        	'periodo' => '2',
        	'year' => '2014',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('periodos')->insert([
        	'periodo' => '1',
        	'year' => '2015',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('periodos')->insert([
        	'periodo' => '2',
        	'year' => '2015',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('periodos')->insert([
        	'periodo' => '1',
        	'year' => '2016',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),
        ]);
        
    }
}
