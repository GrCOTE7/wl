<?php namespace Grcote7\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGrcote7MoviesFilmsActors extends Migration
{
    public function up()
    {
        Schema::create('grcote7_movies_films_actors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('actor_id');
            $table->integer('film_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('grcote7_movies_films_actors');
    }
}
