<?php

namespace Webmaster\Contact\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use October\Rain\Exception\ValidationException;

class ContactForm extends ComponentBase
{
  public function componentDetails()
  {
    return [
      'name' => 'Formulaire de contact',
      'description' => 'Formulaire de contact simple'
    ];
    /**
     * on peut par exemple définir une propriétés de messagerie 
     * de sorte que l'email que vous souhaitez
     * que votre formulaire de contact envoie votre email
     * et peut être un sujet pour le formulaire de contact aussi ou autre
     */
  }

  /**
   * code pour l'envoie du mail
   * cette fonction va être lier à notre formulaire de contact
   * j'ai lié cette function au formulaire via
   * data-request="onSend()" dans la balise form
   * ça permet d'envoyer notre emailn via AJAX
   */
  public function onSend()
  {
    // je récup en post les data saisie
    $data = post();

    // ici j'écris les règles de validation de mes champs 
    $rules = [
      'name' => 'required|min:5',
      'email' => 'required|email'
    ];

    // ici je passe au validateur les data et les règles de validation
    $validator = Validator::make($data, $rules);

    if ($validator->fails()) {
      throw new ValidationException($validator);
    } else {

      $vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'content' => Input::get('content')];

      // le premier paramètre dit à October quelle vue de courrier utilisée
      Mail::send('webmaster.contact::mail.message', $vars, function ($message) {

        $message->to('muriel.colit@gmail.com', 'Admin Person');
        $message->subject(Input::get('subject'));
      });
    }
  }
}
