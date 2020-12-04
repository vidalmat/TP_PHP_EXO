<?php

    class ActeConventionneNonTraitant extends ActeMedical{

        function __construct(string $nomPatient, int $numSecu, int $codeMutuelle, $tauxRemboursement, int $tarif = 35) {
            parent::__construct($nomPatient, $numSecu, $codeMutuelle, $tauxRemboursement, $tarif);
        }

        
        function facturer(ActeMedical $acte1){

            $this->tarif = $acte1;
            echo "Facture acte hors parcours " . $this->acte1->facturer() . " €<br>";

        }
            
        }




?>