<?php

require_once "ActeMedical.php"
require_once "ActeConventionneNonTraitant.php";
require_once "ActeConventionneTraitant.php";
require_once "ActeNonConventionne.php";
require_once "Transmettre.php";

$perso1 = new ActeConventionneNonTraitant("Jean") ;
$perso2 = new ActeConventionneTraitant("Fin");
$perso3 = new ActeNonConventionne("Laetitia");





?>