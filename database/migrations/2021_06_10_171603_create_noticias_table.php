<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('slug',100)->unique();
            $table->string('title',67);
            $table->string('description',155); 
            $table->string('titulo',150); 
            $table->text('descripcion');        
            $table->string('urlfoto',100);
            $table->string('urlvideo',100);
            $table->string('link')->nullable();
            $table->integer('visitas');
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
        Schema::dropIfExists('noticias');
    }
}
