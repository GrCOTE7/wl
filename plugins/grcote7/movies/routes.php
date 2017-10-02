<?php

use Grcote7\Movies\Models\Genre;
use Grcote7\Movies\Models\Movie;
use Grcote7\Movies\Models\Actor;

Route::get('u', function () {

  return Movie::orderBy('year')
              ->paginate(3);
});


Route::get('seed-actors', function () {

  $nbActors = count(Actor::get());
  //var_dump($nbActors);

  if ($nbActors < 100) {

    //  return Movie::orderBy('year')->paginate(3);
    $faker = Faker\Factory::create();


    for ($i = 0; $i < 100; $i++) {

      Actor::create([
                      'name'     => $faker->firstName,
                      'lastname' => $faker->lastName
                    ]);
    }
    return "Actors created !";
  }
  else {
    return 'Les acteurs avaient déjà été créés par seeding...<hr>( La table en contient ' . $nbActors . '! )';
  }
});


Route::get('/populate-movies', function () {

  $faker = Faker\Factory::create();

  $movies = Movie::all();


  foreach ($movies as $movie) {
    $genres = Genre::all()
                   ->random(3);

    $movie->genres = $genres;

    $movie->created_at = $faker->date($format = 'Y-m-d H:i:s', $max = 'now');
    $movie->published  = $faker->boolean($chanceOfGettingTrue = 50);
    $movie->save();
  }

  return $movies;
});
