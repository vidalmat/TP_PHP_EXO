<?php

require_once "ActeMedical.php"
require_once "ActeConventionneNonTraitant.php";
require_once "ActeConventionneTraitant.php";
require_once "ActeNonConventionne.php";
require_once "Transmettre.php";

$perso1 = new ActeMedical("Jean") ;
$perso2 = new ActeMedical("Fin");
$perso3 = new ActeMedical("Laetitia");


var_dump($perso1);
var_dump($perso2);
var_dump($perso3);




?>