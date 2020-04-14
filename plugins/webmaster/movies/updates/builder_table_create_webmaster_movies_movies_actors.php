<?php namespace Webmaster\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebmasterMoviesMoviesActors extends Migration
{
    public function up()
    {
        Schema::create('webmaster_movies_movies_actors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id');
            $table->integer('actor_id');
            $table->primary(['movie_id','actor_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('webmaster_movies_movies_actors');
    }
}
