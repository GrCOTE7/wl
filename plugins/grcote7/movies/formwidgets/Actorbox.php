<?php namespace Grcote7\Movies\FormWidgets;

use Config;
use Grcote7\Movies\Models\Actor;
use Backend\Classes\FormWidgetBase;

class ActorBox extends FormWidgetBase {

  public function widgetDetails() {

    return [
      'name'        => 'Actorbox',
      'description' => 'Champ pour ajouter des acteurs par défaut'
    ];
  }


  public function render() {

    $this->prepareVars();
    //dump($this->vars['selectedValues']);
    return $this->makePartial('widget');
  }


  public function prepareVars() {

    $this->vars['id']     = $this->model->id;
    $this->vars['actors'] = Actor::all()
                                 ->lists('full_name', 'id');
    $this->vars['name']   = $this->formField->getName() . '[]';
    if (!empty($this->getLoadValue())) {
      $this->vars['selectedValues'] = $this->getLoadValue();
    }
    else {
      $this->vars['selectedValues'] = [];
    }
  }


  public function loadAssets() {

    $this->addCss('css/select2.css');
    $this->addJs('js/select2.js');
  }
}
