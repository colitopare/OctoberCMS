<?php namespace Webmaster\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebmasterMoviesActors extends Migration
{
    public function up()
    {
        Schema::create('webmaster_movies_actors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('lastname');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('webmaster_movies_actors');
    }
}
