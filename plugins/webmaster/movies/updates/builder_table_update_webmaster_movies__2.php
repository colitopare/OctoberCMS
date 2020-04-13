<?php namespace Webmaster\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebmasterMovies2 extends Migration
{
    public function up()
    {
        Schema::table('webmaster_movies_', function($table)
        {
            $table->string('slug', 191)->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('webmaster_movies_', function($table)
        {
            $table->string('slug', 191)->nullable()->change();
        });
    }
}
