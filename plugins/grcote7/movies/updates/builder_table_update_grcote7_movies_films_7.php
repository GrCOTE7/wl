<?php namespace Grcote7\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrcote7MoviesFilms7 extends Migration
{
    public function up()
    {
        Schema::table('grcote7_movies_films', function($table)
        {
            $table->text('actors')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('grcote7_movies_films', function($table)
        {
            $table->dropColumn('actors');
        });
    }
}
