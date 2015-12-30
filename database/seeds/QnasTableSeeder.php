<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class QnasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qnas')->insert([
        	'qna' => '1',
        	'year' => '2015',
        	'description' => '1ERA DE ENERO',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),

        ]);
        DB::table('qnas')->insert([
        	'qna' => '2',
        	'year' => '2015',
        	'description' => '2DA DE ENERO',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('qnas')->insert([
        	'qna' => '3',
        	'year' => '2015',
        	'description' => '1RA DE FEBRERO',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('qnas')->insert([
        	'qna' => '4',
        	'year' => '2015',
        	'description' => '2DA DE FEBRERO',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
