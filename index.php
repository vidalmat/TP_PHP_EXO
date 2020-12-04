<?php

require_once "Transmettre.php";
require_once "ActeMedical.php";
require_once "ActeConventionneNonTraitant.php";
require_once "ActeConventionneTraitant.php";
require_once "ActeNonConventionne.php";

$acte1 = new ActeConventionneNonTraitant("Jean", 1231515, 6515,46546);
$acte2 = new ActeConventionneTraitant("Fin", 456489, 168898,8465242);
$acte3 = new ActeNonConventionne("Laetitia", 489789, 18948984,465426245, 50);


var_dump($acte1);
var_dump($acte2);
var_dump($acte3);

echo $acte1->prescrire();
echo $acte2->prescrire();
echo $acte3->prescrire();

echo "Facture parcours médecin traitant " . $acte1->facturer() . " € <br>";
echo "Facture hors parcours médecin traitant " . $acte2->facturer() . " € <br>";
echo "Facture acte non conventionné " . $acte3->facturer() . " € <br>";


echo "Facture (dispense avance frais) acte parcours soin " . $acte1->dispenseAvanceFrais() . " € <br>";
echo "Facture (dispense avance frais) acte hors parcours " . $acte2->dispenseAvanceFrais() . " € <br>";
echo "Facture (dispense avance frais) acte non conventionne " . $acte3->dispenseAvanceFrais() . " € <br>";


?>