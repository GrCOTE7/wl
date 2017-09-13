<?php namespace Grcote7\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrcote7MoviesFilmsActors extends Migration
{
    public function up()
    {
        Schema::table('grcote7_movies_films_actors', function($table)
        {
            $table->integer('actor_id')->unsigned()->change();
            $table->integer('film_id')->unsigned()->change();
            $table->primary(['actor_id','film_id']);
        });
    }
    
    public function down()
    {
        Schema::table('grcote7_movies_films_actors', function($table)
        {
            $table->dropPrimary(['actor_id','film_id']);
            $table->integer('actor_id')->unsigned(false)->change();
            $table->integer('film_id')->unsigned(false)->change();
        });
    }
}
