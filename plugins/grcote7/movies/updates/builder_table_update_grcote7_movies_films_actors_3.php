<?php namespace Grcote7\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrcote7MoviesFilmsActors3 extends Migration
{
    public function up()
    {
        Schema::table('grcote7_movies_films_actors', function($table)
        {
            $table->dropPrimary(['actor_id','movie_id']);
            $table->primary(['movie_id','actor_id']);
        });
    }
    
    public function down()
    {
        Schema::table('grcote7_movies_films_actors', function($table)
        {
            $table->dropPrimary(['movie_id','actor_id']);
            $table->primary(['actor_id','movie_id']);
        });
    }
}
