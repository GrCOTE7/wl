<?php namespace Grcote7\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrcote7MoviesFilms6 extends Migration
{
    public function up()
    {
        Schema::table('grcote7_movies_films', function($table)
        {
            $table->renameColumn('actors_other', 'other_actors');
        });
    }
    
    public function down()
    {
        Schema::table('grcote7_movies_films', function($table)
        {
            $table->renameColumn('other_actors', 'actors_other');
        });
    }
}
