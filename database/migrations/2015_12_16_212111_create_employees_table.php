<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('num_empleado')->unique();
            $table->string('name');
            $table->string('father_lastname');
            $table->string('mother_lastname');
            $table->integer('deparment_id')->unsigned();
            $table->enum('active', ['0', '1'])->default('1');
            $table->foreign('deparment_id')->references('id')->on('deparments');    
            $table->timestamps();
        });
        DB::statement("ALTER TABLE employees ADD num_empleado INT(6) UNSIGNED ZEROFILL NOT NULL AFTER id");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
