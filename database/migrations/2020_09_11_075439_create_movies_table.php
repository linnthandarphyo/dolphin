<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('photo');
            $table->string('director');
            $table->string('genre');
            $table->text('link');
            $table->string('stars');
            $table->text('good_point');
            $table->string('quality');
            $table->string('size');
            $table->text('review');
            $table->integer('release_year');
            $table->string('run_time');
            $table->string('release_country');
            $table->integer('rating');
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
        Schema::dropIfExists('movies');
    }
}
