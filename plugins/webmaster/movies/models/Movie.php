<?php

namespace Webmaster\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
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
    public $table = 'webmaster_movies_';

    /**
     * @var array Validation rules
     */
    public $rules = [];

    protected $jsonable = ['actors'];

    /* Relations */
    public $belongsToMany = [
        'genres' => [
            'Webmaster\Movies\Models\Genre',
            'table' => 'webmaster_movies_movies_genres',
            'order' => 'name_genre'
        ]

    ];
    public $attachOne = [
        'poster' => 'System\Models\File'
    ];
    public $attachMany = [
        'movie_gallery' => 'System\Models\File'
    ];
}
