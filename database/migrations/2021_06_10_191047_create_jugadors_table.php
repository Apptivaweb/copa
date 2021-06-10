<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadors', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title',67);
            $table->string('description',155);
            $table->string('nombre',100);
            $table->string('nombrecompleto',190);
            $table->string('equipo',100);
            $table->string('fechanacimiento',25);
            $table->integer('edad')->nullable();
            $table->string('pais')->nullable();
            $table->string('altura')->nullable();
            $table->string('peso')->nullable();
            $table->string('partidos')->nullable();
            $table->string('debut')->nullable();
            $table->string('posicion')->nullable();
            $table->string('nombreposicion')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('urlfoto')->nullable();	
            $table->integer('visitas')->default(0);
            $table->integer('votos')->default(0);
            $table->string('estrellas')->nullable();
            $table->boolean('estado')->default(0);
            $table->foreignId('equipo_id')->references('id')->on('equipos')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugadors');
    }
}
