<?php

namespace Webmaster\Movies\Models;

use Model;

/**
 * Model
 */
class Actor extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'webmaster_movies_actors';

    /**
     * @var array Validation rules
     */
    public $rules = [];

    /* Relations */
    public $belongsToMany = [
        'movies' => [
            'Webmaster\Movies\Models\Movie',
            'table' => 'webmaster_movies_movies_actors',
            'order' => 'name'
        ]
    ];

    /**
     * Création d'un accesseur pour permettre la concaténation de name et lastname
     */
    public function getFullNameAttribute()
    {
        return $this->name . " " . $this->lastname;
    }
}
