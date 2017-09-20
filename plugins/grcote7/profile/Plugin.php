<?php namespace Grcote7\Profile;

  // 123123
// $2y$10$06ZVAqSvyWqtEQ6X5VuOFuNnKpLKvSZUlEdzSMYCSS1f1Hl8zCAV.

use System\Classes\PluginBase;
use RainLab\User\Models\User as UserModel;
use RainLab\User\Controllers\Users as UsersController;

class Plugin extends PluginBase {

  public function registerComponents() {
  }


  public function registerSettings() {
  }


  public function boot() {

    UserModel::extend(function ($model) {

      $model->addFillable([
                            'facebook',
                            'bio'
                          ]);
    });

    UsersController::extendFormFields(function ($form, $model, $context) {

      $form->addTabFields([
                            'facebook' => [
                              'label' => 'Facebook',
                              'type'  => 'text',
                              'tab'   => 'Profile'
                            ],
                            'bio'      => [
                              'label' => 'Biography',
                              'type'  => 'textarea',
                              'tab'   => 'Profile'
                            ]
                          ]);
    });
  }
}
