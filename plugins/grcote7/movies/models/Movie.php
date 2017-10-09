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

  protected $jsonable = ['other_actors'];

  /* Relations */

  public $belongsToMany = [
    'genres' => [
      'Grcote7\Movies\Models\Genre',
      'table' => 'grcote7_movies_films_genres',
      'order' => 'genre_title'
    ],
    'actors' => [

      'Grcote7\Movies\Models\Actor',
      'table' => 'grcote7_movies_films_actors',
      'order' => 'name'
    ]
  ];

  public $attachOne = [
    'poster' => 'System\Models\File'
  ];

  public $attachMany = [
    'movie_gallery' => 'System\Models\File'
  ];

  public function scopeListFrontEnd($query, $options = []) {

    extract(array_merge([
                          'page'    => 1,
                          'perPage' => 5,
                          'sort'    => 'created_at desc',
                          'genres'  => 'null',
                          'year'    => ''
                        ], $options));

    if($genres !== "null"){
      
      if (!is_array($genres)){
        $genres=[$genres];
      }

      foreach ($genres as $genre) {
        $query->whereHas('genres', function($q) use ($genre){
          $q->where('id', '=', $genre);
        });
      }
    }

    if($year){
      $query->where('year', '=', $year);
    }

    return $query->paginate($perPage, $page);
  }

}