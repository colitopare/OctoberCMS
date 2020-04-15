<?php

namespace Webmaster\Movies;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Webmaster\Movies\Components\Actors' => 'actors'
        ];
    }

    public function registerSettings()
    {
    }

    public function registerFormWidgets()
    {
        return [
            'Webmaster\Movies\FormWidgets\Actorbox' => [
                'label' => 'Champ ActorBox',
                'code' => 'actorbox'
            ]
        ];
    }
}
