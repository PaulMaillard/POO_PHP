<?php

/** An abstract class cannot be instantiated (a Stats object wouldn't make sense)
You can apply the proprieties of an abstract class to a concreteusing inheritance. */
abstract class Stats {

/** Protected variables can only be used whithin the class they are defined in
and any class that inherit it. */
  protected $nom = "test";
  protected $pdv = 0;
  protected $atk = 0;
  protected $def = 0;


    public function getNom(){
      return $this->nom;
    }

    public function setNom($nom){
      $this->nom = $nom;
    }
}
