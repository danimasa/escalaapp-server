<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escalas', function($table){
          $table->increments('id');
          $table->date('data_escala');
          $table->string('ministro', 100);
          $table->timestamps();
        });

        Schema::create('instrumentals', function($table){
          $table->increments('id');
          $table->string('funcao', 20);
          $table->string('nome');
          $table->timestamps();
        });

        Schema::create('escala_instrumental', function($table){
          $table->bigInteger('instrumental_id');
          $table->bigInteger('escala_id');
        });

        Schema::create('musics', function($table){
          $table->increments('id');
          $table->string('nome');
          $table->string('author');
          $table->string('tom', 10);
          $table->string('link');
          $table->timestamps();
        });

        Schema::create('escala_music', function($table){
          $table->bigInteger('music_id');
          $table->bigInteger('escala_id');
        });

        Schema::create('backs', function($table){
          $table->increments('id');
          $table->string('nome');
          $table->timestamps();
        });

        Schema::create('back_escala', function($table){
          $table->bigInteger('back_id');
          $table->bigInteger('escala_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('escalas');
        Schema::drop('instrumentals');
        Schema::drop('musics');
        Schema::drop('escala_music');
        Schema::drop('backs');
        Schema::drop('back_escala');
        Schema::drop('escala_instrumental');
    }
}
