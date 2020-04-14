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

  public function getSaveValue($category_products)
  {
    $newArray = [];

    foreach ($category_products as $category_productID) {
      if (!is_numeric($category_productID)) {
        $newCategoryProduct = new Actor;
        $name = explode(' ', $category_productID);

        $newCategoryProduct->name_category_product = $name[0];
        $newCategoryProduct->save();
        $newArray[] = $newCategoryProduct->id;
      } else {
        $newArray[] = $category_productID;
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
