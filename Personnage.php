<?php

class Personnage extends Stats{

/** The $race and $classe variables are defined on null, as their values  */
  public $nom = null;
  public $race = null;
  public $classe = null;

/** When Personnage in instantiated, it will affect the arguments nom, race and
classe to the variables $nom, $race and $classe */
  public function __construct($nom, $race, $classe) {
    $this->nom = $nom;
    $this->race = $race;
    $this->classe = $classe;
  }

  public function attaquer() {
    $this->classe->attaquer();
  }

/** This function has to possess an argument, as all races implement the
seDeplacer method, which was defined in the iRace interface */
  public function seDeplacer() {
    $this->race->seDeplacer(2);
  }

}
