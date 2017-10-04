<?php namespace Grcote7\Movies\Components;


use Input;
use Cms\Classes\ComponentBase;
use Grcote7\Movies\Models\Movie;
use Grcote7\Movies\Models\Genre;

class FilterMovies extends ComponentBase {

  public $movies, $genres, $years;


  public function componentDetails() {

    return [
      'name'        => 'Filter Movies',
      'description' => 'Filtrage pour affichage frontend'
    ];
  }


  public function onRun() {

    $this->movies = $this->filterMovies();
    $this->genres = Genre::all();
    $this->years  = $this->filterYears();
  }


  public function filterYears() {

    $query = Movie::all();

    $years = [];

    foreach ($query as $movie) {
      $years[] = $movie->year;
    }

    $years = array_unique($years);

    //    rsort($years); Fait par filtre twig | sort | reverse(true)
    //    dd($years);

    return $years;
  }


  protected function filterMovies() {


    $year  = Input::get('year');
    $genre = Input::get('genre');
    //    dd($genre);

    if ($year) {
      $query = Movie::where('year', '=', $year)
                    ->get();
    }
    else {
      $query = Movie::all();
    }


    if ($genre) {
      $query = Movie::whereHas('genres', function ($filter) use ($genre) {

        $filter->where('slug', '=', $genre);
      })
                    ->get();
    }

    if ($genre && $year) {
      $query = Movie::whereHas('genres', function ($filter) use ($genre) {

        $filter->where('slug', '=', $genre);
      })
                    ->where('year', '=', $year)
                    ->get();
    }


//      dd($query->find(1)->year);
    //    $query=777;
    return $query;
  }
}
