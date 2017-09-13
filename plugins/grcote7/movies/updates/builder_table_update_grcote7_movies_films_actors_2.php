<?php namespace Grcote7\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrcote7MoviesFilmsActors2 extends Migration
{
    public function up()
    {
        Schema::table('grcote7_movies_films_actors', function($table)
        {
            $table->dropPrimary(['actor_id','film_id']);
            $table->renameColumn('film_id', 'movie_id');
            $table->primary(['actor_id','movie_id']);
        });
    }
    
    public function down()
    {
        Schema::table('grcote7_movies_films_actors', function($table)
        {
            $table->dropPrimary(['actor_id','movie_id']);
            $table->renameColumn('movie_id', 'film_id');
            $table->primary(['actor_id','film_id']);
        });
    }
}
