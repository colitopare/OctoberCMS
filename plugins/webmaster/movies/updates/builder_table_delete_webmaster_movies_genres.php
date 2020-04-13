<?php namespace Webmaster\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWebmasterMoviesGenres extends Migration
{
    public function up()
    {
        Schema::dropIfExists('webmaster_movies_genres');
    }
    
    public function down()
    {
        Schema::create('webmaster_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name_genre', 191);
            $table->string('slug', 191);
        });
    }
}
