<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodigosDeIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codigos_de_incidencias', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('description');
            $table->integer('grupo');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE codigos_de_incidencias ADD code INT(2) UNSIGNED ZEROFILL NOT NULL AFTER id');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('codigos_de_incidencias');
    }
}
