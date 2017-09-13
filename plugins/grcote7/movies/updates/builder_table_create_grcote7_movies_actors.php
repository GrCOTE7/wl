<?php namespace Grcote7\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGrcote7MoviesActors extends Migration
{
    public function up()
    {
        Schema::create('grcote7_movies_actors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('lastnme')->nullable();
            $table->smallInteger('age')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('grcote7_movies_actors');
    }
}
