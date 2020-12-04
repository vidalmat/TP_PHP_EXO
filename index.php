<?php

require_once "ActeMedical.php";
require_once "ActeConventionneNonTraitant.php";
require_once "ActeConventionneTraitant.php";
require_once "ActeNonConventionne.php";
require_once "Transmettre.php";

$perso1 = new ActeConventionneNonTraitant("Jean", 1231515, 6515,70);
$perso2 = new ActeConventionneTraitant("Fin", 456489, 168898,70);
$perso3 = new ActeNonConventionne("Laetitia", 489789, 18948984,70);


var_dump($perso1);
var_dump($perso2);
var_dump($perso3);


echo $perso1->caracteristiques();
echo $perso2->caracteristiques();
echo $perso3->caracteristiques();


?>