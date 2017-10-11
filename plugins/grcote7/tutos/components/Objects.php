<?php namespace Grcote7\Tutos\Components;

use Debugbar;
use Cms\Classes\ComponentBase;
use \Grcote7\Tutos\Classes\Person;


class Objects extends ComponentBase {

  public $mesVar;

	public function componentDetails() {

		return [
		    'name'        => 'Tutos Objets',
		    'description' => 'Tutos sur les objets'
		];

	}

	public function defineProperties() {

  		return [

    	];
	}

	public function onRun() {

    	// mail('test', 'a', 'b');

    	$this->mesVar = $this->firstClass();
  	}

  protected function firstClass()
  {

    $teacher = new Person('Lionel','C', 52);
    $student1 = new Person('Doro', 'W', 56);
    $student2 = new Person('Jade', 'W', 13);
    
    $groups = ['student1', 'student2', 'teacher'];

    $i=0;
    $presentations='';


    foreach ($groups as $group) {
      $i++;
     
      $presentations.=$$group->greet();
      $presentations.=$this->changeLigne($i, $groups);
      $this->getObjVar($group, $$group);
    }

    return  ($presentations);
  }

  public function getObjVar($name, $person) {
     
    Debugbar::addMessage($person, $name);  
    
  }

  public function changeLigne($i, $arr) {
    
    $nbArr = count($arr);
      
    $br='<br>';
    if ($i==$nbArr) $br.='&nbsp;';
    return $br;
  }

}