<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeparmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deparments', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('description');
            $table->timestamps();

           
        });
        DB::statement("ALTER TABLE deparments ADD code INT(5) UNSIGNED ZEROFILL NOT NULL AFTER id");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('deparments');
    }
}
