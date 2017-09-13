<?php namespace Grcote7\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrcote7MoviesFilms5 extends Migration
{
    public function up()
    {
        Schema::table('grcote7_movies_films', function($table)
        {
            $table->renameColumn('actors', 'actors_other');
        });
    }
    
    public function down()
    {
        Schema::table('grcote7_movies_films', function($table)
        {
            $table->renameColumn('actors_other', 'actors');
        });
    }
}
