<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha', function (Blueprint $table) {
            $table->id('id_ficha'); 
            $table->string('nombreprograma','225');
            $table->string('sigla','3');
            //foreign
            $table->bigInteger('FK_jornada')->unsigned();
            $table->bigInteger('FK_formacion')->unsigned();
            $table->foreign('FK_jornada')->references('id')->on('jornada');
            $table->foreign('FK_formacion')->references('id_formacion')->on('formacion');
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
        Schema::dropIfExists('ficha');
    }
}