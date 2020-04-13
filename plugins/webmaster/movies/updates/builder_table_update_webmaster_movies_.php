<?php namespace Webmaster\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebmasterMovies extends Migration
{
    public function up()
    {
        Schema::table('webmaster_movies_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('webmaster_movies_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
