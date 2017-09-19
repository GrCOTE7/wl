<?php namespace Grcote7\Profile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddNewFields extends Migration {

  public function up() {

    Schema::table('users', function ($table) {

      $table->string('facebook')
            ->nullable();
      $table->text('bio')
            ->nullable();
    });
  }
  

  public function down() {

    Schema::table('users', function ($table) {

      if (Schema::hasColumn('facebook', 'bio')) {
        $table->dropColumn([
                             'facebook',
                             'bio'
                           ]);
      }
    });
  }

}
// php artisan plugin:refresh grcote7.profile
// Commenter la fonction dans la méthode up() pour supprimer définitivement les modifs dans la table
// php artisan cache:clear (à faire avant chaque manipe suivante)
