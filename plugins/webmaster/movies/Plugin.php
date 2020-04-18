<?php

namespace Webmaster\Movies;

use System\Classes\PluginBase;
use Illuminate\Support\Facades\Event;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Webmaster\Movies\Components\Actors' => 'actors',
            'Webmaster\Movies\Components\ActorForm' => 'actorform'
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

    public function boot()
    {
        \Event::listen('offline.sitesearch.query', function ($query) {

            // The controller is used to generate page URLs.
            $controller = \Cms\Classes\Controller::getController() ?? new \Cms\Classes\Controller();

            // Search your plugin's contents
            $items = Models\Movie::where('name', 'like', "%${query}%")
                ->orWhere('description', 'like', "%${query}%")
                ->get();

            // Now build a results array
            $results = $items->map(function ($item) use ($query, $controller) {

                // If the query is found in the title, set a relevance of 2
                $relevance = mb_stripos($item->title, $query) !== false ? 2 : 1;

                // Optional: Add an age penalty to older results. This makes sure that
                // newer results are listed first.
                // if ($relevance > 1 && $item->created_at) {
                //    $ageInDays = $item->created_at->diffInDays(\Illuminate\Support\Carbon::now());
                //    $relevance -= \OFFLINE\SiteSearch\Classes\Providers\ResultsProvider::agePenaltyForDays($ageInDays);
                // }
                if ($item->poster) {
                    return [
                        'title'     => $item->name,
                        'text'      => $item->description,
                        'url'       => $controller->pageUrl('cms-page-file-name', ['slug' => $item->slug]),
                        'thumb'     => optional($item->poster)->first(),
                        // Instance of System\Models\File
                        'relevance' => $relevance, // higher relevance results in a higher
                    ];
                } else {
                    return [
                        'title'     => $item->name,
                        'text'      => $item->description,
                        'url'       => $controller->pageUrl('cms-page-file-name', ['slug' => $item->slug]),
                        'relevance' => $relevance, // higher relevance results in a higher
                    ];
                }
            });

            return [
                'provider' => 'Movie', // The badge to display for this result
                'results'  => $results,
            ];
        });
    }
}
