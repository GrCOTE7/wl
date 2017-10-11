<?php namespace Grcote7\Tutos\Classes;


class Person {

  // Creating some properties (variables tied to an object)
  public $isAlive = true;
  public $prenom, $lastname, $age;

  
  // Assigning the values
  public function __construct($prenom, $lastname, $age) {

    $this->prenom = $prenom;
    $this->lastname  = $lastname;
    $this->age       = $age;
  }


  // Creating a method (function tied to an object)
  public function greet() {

    return "Salut, mon nom est <strong>" . $this->prenom . " " . $this->lastname . "</strong>. Heureux de vous rencontrer! :-)";
  }
}