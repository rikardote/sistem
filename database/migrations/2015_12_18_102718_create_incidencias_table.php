<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('qna_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            
            $table->integer('periodo_id')->unsigned()->nullable();
            $table->integer('codigodeincidencia_id')->unsigned();
            $table->string('token');

            $table->foreign('qna_id')->references('id')->on('qnas');    
            $table->foreign('employee_id')->references('id')->on('employees');    
            
            $table->foreign('periodo_id')->references('id')->on('periodos');  
            $table->foreign('codigodeincidencia_id')->references('id')->on('codigos_de_incidencias');  

            $table->enum('capturada', ['0', '1'])->default('0');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('incidencias');
    }
}
