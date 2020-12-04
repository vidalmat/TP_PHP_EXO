<?php

    class ActeConventionneTraitant extends ActeMedical{

        function __construct(string $nomPatient, int $numSecu, int $codeMutuelle, $tauxRemboursement, int $tarif = 25) {
            parent::__construct($nomPatient, $numSecu, $codeMutuelle, $tauxRemboursement, $tarif);
        }
        

        function facturer($payer){

            $this->tarif += $payer;
            return "Le tarif à payer est de " . $this->payer .  "€" . "." . "<br>";
    
        }
    }




?>