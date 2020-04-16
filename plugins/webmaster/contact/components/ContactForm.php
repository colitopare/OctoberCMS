<?php

namespace Webmaster\Contact\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;

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
    $vars = ['name' => Input::get('email'), 'email' => Input::get('email'), 'content' => Input::get('content')];

    // le premier paramètre dit à October quelle vue de courrier utilisée
    Mail::send('webmaster.contact::mail.message', $vars, function ($message) {

      $message->to('muriel.colit@gmail.com', 'Admin Person');
      $message->subject(Input::get('subject'));
    });
  }
}
