<?php

namespace Webmaster\Movies\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Config;
use Webmaster\Movies\Models\Actor;

class ActorBox extends FormWidgetBase
{
  // vidéo 13 à 5:10
  // ici on met le nom de notre widget
  public function widgetDetails()
  {
    return [
      'name' => 'Actorbox',
      'description' => 'Field for adding actors'
    ];
  }

  // ici on lui indique le partial à utiliser
  public function render()
  {
    $this->prepareVars();
    // dump($this->vars['selectedValues']);
    return $this->makePartial('widget');
  }

  public function prepareVars()
  {
    $this->vars['id'] = $this->model->id;
    // je met full_name car j'ai créer un accesseur dans Actor.php avec la function 
    // getFullNameAttribute()
    $this->vars['actors'] = Actor::all()->lists('full_name', 'id');
    $this->vars['name'] = $this->formField->getName() . '[]';
    if (!empty($this->getLoadValue())) {
      $this->vars['selectedValues'] = $this->getLoadValue();
    } else {
      $this->vars['selectedValues'] = [];
    }
  }

  /**
   * Vidéo 15
   * Cette function sert à Sauvegarder une nouvelle entrée d'actor
   * via le formulaire Movie avec Ajax
   */
  public function getSaveValue($actors)
  {
    $newArray = [];

    foreach ($actors as $actorID) {
      if (!is_numeric($actorID)) {
        /**
         * si la valeur n'est pas numérique 
         * c'est que c'est un acteur qui n'est pas en bdd
         * du coup il faut créer un nouvel acteur
         */
        $newActor = new Actor;
        // Comme dans Actor il y a plusieurs champs, je récupère les différentes valeurs
        $nameLastname = explode(' ', $actorID);
        $newActor->name = $nameLastname[0];
        $newActor->lastname = $nameLastname[1];
        $newActor->save();
        $newArray[] = $newActor->id;
      } else {
        $newArray[] = $actorID;
      }
    }

    return $newArray;
  }


  public function loadAssets()
  {
    $this->addCss('css/select2.css');
    $this->addJs('js/select2.js');
  }
}
