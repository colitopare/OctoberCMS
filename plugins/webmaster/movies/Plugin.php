<?php

namespace Webmaster\Movies;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
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
