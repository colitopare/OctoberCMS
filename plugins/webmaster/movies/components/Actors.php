<?php

namespace Webmaster\Movies\Components;

use Cms\Classes\ComponentBase;
use Webmaster\Movies\Models\Actor;

class Actors extends ComponentBase
{
  public $actors;

  // on va décrire le component
  public function componentDetails()
  {
    return [
      'name' => 'Actor List',
      'description' => 'List of actors'
    ];
  }

  /**
   * methode d'exécution interne à October
   * elle dit quoi faire lorsque ce component est affiché
   * et veux charger tout les acteurs
   */
  public function onRun()
  {
    $this->actors = $this->loadActors();
  }


  // Pour permettre le déplacement du composant dans la page
  protected function loadActors()
  {
    return Actor::all();
  }
}
