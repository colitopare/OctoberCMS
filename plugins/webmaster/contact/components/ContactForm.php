<?php

namespace Webmaster\Contact\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

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
    // ici je fait la validation de mes champs 
    $validator = Validator::make(
      [
        'name' => Input::get('name'),
        'email' => Input::get('email')
      ],
      [
        'name' => 'required|min:5',
        'email' => 'required|email'
      ]
    );

    if ($validator->fails()) {

      // si la validation ne passe pas 
      // je vais afficher des messages à l'utilisateur du formulaire
      // Pour cela on redirige avec les erreurs du validator
      return Redirect::back()->withErrors($validator);
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
