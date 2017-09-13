<?php namespace Grcote7\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrcote7MoviesActors extends Migration
{
    public function up()
    {
        Schema::table('grcote7_movies_actors', function($table)
        {
            $table->renameColumn('lastnme', 'lastname');
        });
    }
    
    public function down()
    {
        Schema::table('grcote7_movies_actors', function($table)
        {
            $table->renameColumn('lastname', 'lastnme');
        });
    }
}
