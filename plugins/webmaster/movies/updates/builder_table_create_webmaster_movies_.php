<?php namespace Webmaster\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebmasterMovies extends Migration
{
    public function up()
    {
        Schema::create('webmaster_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('year');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('webmaster_movies_');
    }
}
