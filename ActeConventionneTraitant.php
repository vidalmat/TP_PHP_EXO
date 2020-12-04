<?php

    class ActeConventionneTraitant extends ActeMedical{

        function __construct(string $nomPatient, int $numSecu, int $codeMutuelle, $tauxRemboursement, int $tarif = 25) {
            parent::__construct($nomPatient, $numSecu, $codeMutuelle, $tauxRemboursement, $tarif);
        }
        

        function facturer(ActeMedical $acte2){

            $this->tarif = $acte2;
            echo "Facture acte parcours soin " . $acte2 . " €<br>";

        }
        

    }




?>