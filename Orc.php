<?php

/** That class inherits from Stats, meaning that it possesses all the proprieties
and methods defined in Stats. */
class Orc extends Stats implements iRace{

/** The __construct method is called first when the object is instantiated */
  public function __construct() {
    $this->nom = "Orc";
  }

/** The implementation of seDeplacer() has been made mandatory by the use of the
iClasse interface. It has to use a distance variable as an argument */
  public function seDeplacer($distance) {
    echo " se Déplace de " . $distance;
  }

}
