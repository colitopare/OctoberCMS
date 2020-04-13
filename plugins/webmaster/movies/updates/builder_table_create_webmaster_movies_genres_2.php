<?php namespace Webmaster\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebmasterMoviesGenres2 extends Migration
{
    public function up()
    {
        Schema::create('webmaster_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name_genre');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('webmaster_movies_genres');
    }
}
