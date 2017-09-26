<?php namespace Grcote7\Films\Updates;

use Faker;
use Grcote7\Movies\Models\Movie;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder {

  public function run() {

    $faker = Faker\Factory::create();


    for ($i = 0; $i < 100; $i++) {

      $name = $faker->sentence($nbWords = 3, $variableNbWords = true);
      Movie::create([
                      'name'        => $name,
                      'slug'        => str_slug($name, '-'),
                      'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                      'year'        => $faker->year($max = 'now')
                    ]);
    }
  }
}

// Commande dans terminal pour re-initialiser le plugin
// php artisan plugin:refresh grcote7.movies
