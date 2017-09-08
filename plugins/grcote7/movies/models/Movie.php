<?php namespace Grcote7\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model {

  use \October\Rain\Database\Traits\Validation;

  /*
   * Disable timestamps by default.
   * Remove this line if timestamps are defined in the database table.
   */
  public $timestamps = false;

  /*
   * Validation
   */
  public $rules = [
  ];

  /**
   * @var string The database table used by the model.
   */
  public $table = 'grcote7_movies_films';

  protected $jsonable = ['actors'];

  /* Relations */

  public $belongsToMany = [
    'genres' => [

      'Grcote7\Movies\Models\Genre',
      'table' => 'grcote7_movies_films_genres',
      'order' => 'genre_title'
    ]
  ];

  public $attachOne = [
    'poster' => 'System\Models\File'
  ];

  public $attachMany = [
    'movie_gallery' => 'System\Models\File'
  ];
  
}