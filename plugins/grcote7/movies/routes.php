<?php

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