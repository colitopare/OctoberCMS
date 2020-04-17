<?php

namespace Webmaster\Profile;

use System\Classes\PluginBase;
use RainLab\User\Controllers\Users as UsersController;
use RainLab\User\Models\User as UserModels;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    /**
     * On va avoir besoin que les controllers étendent le plugin du User
     * Je vais le faire dans cette fonction de démarrage
     * Elle va être lancer avant que tout le reste soit affiché sur la page
     */
    public function boot()
    {
        // Pour permettre que les 2 champs ajouter 
        // puissent être modifiable côté frontend
        // Je vais étendre le modèle
        UserModels::extend(function ($model) {
            $model->addFillable([
                'facebook',
                'bio'
            ]);
        });



        // ça va utiliser le modèle de ce controller pour le formulaire, 
        // le modèle et les variables de context
        // maintenant on va ajouter les 2 champs supplémentaires
        UsersController::extendFormFields(function ($form, $model, $context) {

            // On créra un nouvel onglet Profile avec les 2 champs
            $form->addTabFields([
                'facebook' => [
                    'label' => 'Facebook',
                    'type' => 'text',
                    'tab' => 'Profile'
                ],
                'bio' => [
                    'label' => 'Bibiographie',
                    'type' => 'textarea',
                    'tab' => 'Profile'
                ]
            ]);
        });
    }
}