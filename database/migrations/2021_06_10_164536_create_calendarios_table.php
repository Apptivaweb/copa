<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendarios', function (Blueprint $table) {
            $table->id();
            $table->string('fecha');
            $table->string('hora');
            $table->string('urlfoto')->nullable();
            $table->text('descripcion');
            $table->integer('orden')->default(0);
            $table->integer('visitas')->default(0);
            $table->boolean('jugado')->default(0);
            $table->integer('marcador_1')->nullable();
            $table->integer('marcador_2')->nullable();

            $table->foreignId('equipo1_id')->references('id')->on('equipos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('equipo2_id')->references('id')->on('equipos')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('calendarios');
    }
}
