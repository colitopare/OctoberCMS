<?php

namespace Webmaster\Profile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddNewFields extends Migration
{

  public function up()
  {
    Schema::table('users', function ($table) {
      $table->string('facebook')->nullable();
      $table->text('bio')->nullable();
    });
  }

  // La function down() 
  // est utilisée lorsque l'on veux actualiser la BDD et recommencez
  // ou lorsqu'on veut rétablir la BDD avec la version précédente
  // Ajouter ou supprimer des champs
  public function down()
  {
    $table->dropDown([
      'faccebook',
      'bio'
    ]);
  }
}
