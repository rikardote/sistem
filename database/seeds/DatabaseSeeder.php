<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(DeparmentsTableSeeder::class);
        $this->call(QnasTableSeeder::class);
        $this->call(PeriodosTableSeeder::class);
        $this->call(CodigosdeincidenciasTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);

        Model::reguard();
    }
}
