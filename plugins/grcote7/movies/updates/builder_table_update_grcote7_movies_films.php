<?php namespace Grcote7\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrcote7MoviesFilms extends Migration
{
    public function up()
    {
        Schema::rename('grcote7_movies_', 'grcote7_movies_films');
    }
    
    public function down()
    {
        Schema::rename('grcote7_movies_films', 'grcote7_movies_');
    }
}
