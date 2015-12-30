<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
        	'num_empleado' => '332618',
        	'name' => 'HECTOR RICARDO',
        	'father_lastname' => 'FUENTES',
        	'mother_lastname' => 'ARMENTA',
        	'deparment_id' => '3',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),

        ]);
    }
}
