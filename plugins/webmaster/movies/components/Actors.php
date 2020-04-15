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

  // On va définir les options de notre composant
  // Vidéo 17
  public function defineProperties()
  {
    return [
      'results' => [
        'title' => 'Nombre d acteurs',
        'description' => 'Combien d acteurs voulez-vous afficher par défaut',
        'default' => 0,
        // uniquement des chiffre
        'validationPattern' => '^[0-9]+$',
        // message de validation,
        'validationMessage' => 'on doit saisir que des chiffres',
      ],
      'sortOrder' => [
        'title' => 'Trie des acteurs',
        'description' => 'Trier ces acteurs',
        // définir le type de cette option
        'type' => 'dropdown',
        'default' => 'name asc'
      ]
    ];
  }

  /**
   * Nouvelle function qui va être appelée pour obtenir l'ordre des tries
   */
  public function getSortOrderOptions()
  {
    return [
      'name asc' => 'Nom (Croissant)',
      'name desc' => 'Nom (Décroissant)'
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
    // si 0 est passé, on doit afficher tous les acteurs
    $query = Actor::all();

    // Pour la partie des tries, on utilise sortBy() de laravel
    if ($this->property('sortOrder') == 'name asc') {
      $query = $query->sortBy('name');
    }
    if ($this->property('sortOrder') == 'name desc') {
      $query = $query->sortByDesc('name');
    }

    // si c'est supérieur à 0 on récupère le nombre passé dans results
    if ($this->property('results') > 0) {
      $query = $query->take($this->property('results'));
    }

    // dans take on va lire le nombre que l'on a passer dans le backend
    // pour pouvoir n'afficher que le nombre souhaité dynamiquement
    return $query;
  }
}
