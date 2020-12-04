<?php

    class ActeNonConventionne extends ActeMedical{

        function __construct(string $nomPatient, int $numSecu, int $codeMutuelle, $tauxRemboursement, int $tarif = 55) {
            parent::__construct($nomPatient, $numSecu, $codeMutuelle, $tauxRemboursement, $tarif);
        }


        function facturer($payer){

            $this->tarif += $payer;
    
        }


        function honosup($sup){

            if($this->tarif <= $sup){
                return "Le montant supplémentaire des honoraires à payer est de " . $this->sup . "." . "<br>";
            }
            
        }
    }




?>