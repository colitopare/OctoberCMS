<?php

namespace Webmaster\movies\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use October\Rain\Support\Facades\Flash;
use Webmaster\Movies\Models\Actor;

class ActorForm extends ComponentBase
{
  public function componentDetails()
  {
    return [
      'name' => 'Formulaire d ajout d acteur',
      'description' => 'Formulaire Pour ajouter des acteurs côté frontend'
    ];
  }

  /**
   * Va permettre la validation et l'enregistrement du formulaire
   */
  public function onSave()
  {
    $actor = new Actor;
    $actor->name = Input::get('name');
    $actor->lastname = Input::get('lastname');
    $actor->actorimage = Input::file('actorimage');
    $actor->save();

    Flash::success("L'acteur a bien été ajouter");
    return Redirect::back();
  }
}
