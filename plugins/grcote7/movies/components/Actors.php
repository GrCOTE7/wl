<?php namespace Grcote7\Movies\Components;

use Cms\Classes\ComponentBase;
use Grcote7\Movies\Models\Actor;

class Actors extends ComponentBase {

  public $actors;


  public function componentDetails() {

    return [
      'name'        => 'Actor list',
      'description' => 'List of actors'
    ];
  }


  public function defineProperties() {

    return [
      'results' => [
        'title'             => 'Number of Actors',
        'description'       => 'How  many actors do you want to display?',
        'default'           => 0,
        'validationPattern' => '^[0-9]+$',
        'validationMessage' => 'Only numbers allowed'
      ],

      'sortOrder' => [
        'title'       => 'Sort Actors',
        'description' => 'Sort those actors',
        'type'        => 'dropdown',
        'default'     => 'lastname asc'
      ]
    ];
  }


  public function getSortOrderOptions() {

    return [
      'lastname asc'  => 'Lastname (ascending)',
      'lastname desc' => 'Lastname (descending)'
    ];
  }


  public function onRun() {

    $this->actors = $this->loadActors();
  }


  protected function loadActors() {

    $query = Actor::all();

    if ($this->property('sortOrder') == 'lastname asc') {
      $query = $query->sortBy('lastname');
    }

    if ($this->property('sortOrder') == 'lastname desc') {
      $query = $query->sortByDesc('lastname');
    }

    if ($this->property('results') > 0) {
      $query = $query->take($this->property('results'));
    }

    return $query;
  }

}