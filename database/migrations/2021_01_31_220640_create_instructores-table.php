<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructores', function (Blueprint $table) {
            $table->id('id_instructores');
            $table->string('nombres', '10');
            $table->string('apellidos','10');
            $table->string('correo','40');
            $table->string('fechaNacimiento','10');
            $table->string('genero','2');
            $table->binary('foto');
            $table->string('tipoDoc','2');
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
        Schema::dropIfExists('instructores');
    }
}