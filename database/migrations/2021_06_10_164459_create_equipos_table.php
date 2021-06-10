<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
   
            $table->string('slug',150);
            $table->string('title',67);
            $table->string('description',155);
            $table->string('nombre',100);
            $table->text('descripcion');
            $table->string('urlfoto')->nullable(); 
            $table->string('urlgif')->nullable();
            $table->integer('visitas')->default(0);
            $table->integer('votos')->default(0);
            $table->integer('pj');
            $table->integer('pg');
            $table->integer('pe');
            $table->integer('pp');
            $table->integer('gf');
            $table->integer('gc');
            $table->integer('pts');
            $table->integer('gd');
            $table->string('grupos',1);
            $table->foreignId('campeonato_id')->references('id')->on('campeonatos')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
