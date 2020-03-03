<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_lists', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->string('name');
             $table->string('height');
             $table->string('mass')->nullable();
             $table->string('hair_color')->nullable();
             $table->string('skin_color');
             $table->string('eye_color');
             $table->string('birth_year');
             $table->string('gender');
             $table->string('homeworld');
             $table->string('films_id')->nullable();
             $table->string('comment_id')->nullable();       
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
        Schema::dropIfExists('movie_lists');
    }
}
