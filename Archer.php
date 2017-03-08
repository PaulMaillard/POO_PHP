<?php

/** This class inherits from Stats, meaning that it possesses all the
proprieties and methods defined in Stats. It implements the iClasse interface,
so it has to implement all methods declared in iClasse */
class Archer extends Stats implements iClasse {

/** The __construct method is called first when the object is instantiated */
  public function __construct() {
    $this->nom = "Archer";
  }

/** The implementation of attaquer() has been made mandatory by the use of the
iClasse interface */
  public function attaquer() {
    echo " tire une flèche";
  }

}
