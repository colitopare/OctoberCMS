<?php namespace Webmaster\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebmasterMovies4 extends Migration
{
    public function up()
    {
        Schema::table('webmaster_movies_', function($table)
        {
            $table->dropColumn('actors');
        });
    }
    
    public function down()
    {
        Schema::table('webmaster_movies_', function($table)
        {
            $table->text('actors')->nullable();
        });
    }
}
