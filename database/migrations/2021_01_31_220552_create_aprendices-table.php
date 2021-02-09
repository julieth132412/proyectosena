<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprendicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('aprendices', function (Blueprint $table){
            $table-> id();
            $table->decimal( 'documento');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('correo_electronico');
            $table->string('fecha_nacimiento');
            $table->string('genero');
            $table->string('tipo_documento');
            $table->string('sigla');
            $table->timestamps();
            $table->bigInteger('FK_ficha')->unsigned();
            $table->foreign('FK_ficha')->references('id_ficha')->on('ficha');
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
        Schema::dropIfExists('aprendices');
    }
}