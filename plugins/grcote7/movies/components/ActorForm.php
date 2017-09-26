<?php namespace Grcote7\Movies\Components;


use Input;
use October\Rain\Support\Facades\Flash;
use Redirect;
//use Validator;
use Cms\Classes\ComponentBase;
use Grcote7\Movies\Models\Actor;

class ActorForm extends ComponentBase {

  public function componentDetails() {

    return [
      'name'        => 'Actor Form',
      'description' => 'Enter actor'
    ];
  }


  public function onSave() {

    $actor             = new Actor();
    $actor->name       = Input::get("name");
    $actor->lastname   = Input::get("lastname");
    $actor->actorimage = Input::file("actorimage");
    $actor->save();

    Flash::success('Actor added !');
    return Redirect::back();
  }
}
