<?php

require("iClasse.php");
require("iRace.php");
require("Stats.php");
require("Orc.php");
require("Guerrier.php");
require("Archer.php");
require("Personnage.php");

/** Creation of an instance of Personnage, called perso1. Every instance of
Personnage has to possess a name, race and class as arguments, as defined in
the __construct method of Personnage.php */
$perso1 = new Personnage("Bob", new Orc(), new Guerrier());

echo $perso1->getNom();
echo $perso1->race->getNom();
echo $perso1->classe->getNom();

$perso1->attaquer();
$perso1->seDeplacer();

// See line 11
$perso2 = new Personnage("Bill", new Orc(), new Archer());

$perso2->attaquer();
