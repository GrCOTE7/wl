<?php namespace Grcote7\Tree\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGrcote7TreeUsers extends Migration
{
    public function up()
    {
        Schema::create('grcote7_tree_users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->integer('parrain_id')->unsigned();
            $table->string('name');
            $table->primary(['id','parrain_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('grcote7_tree_users');
    }
}
