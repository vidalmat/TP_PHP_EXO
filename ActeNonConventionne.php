<?php

    class ActeNonConventionne extends ActeMedical{

        function __construct(string $nomPatient, int $numSecu, int $codeMutuelle, $tauxRemboursement, int $tarif = 55) {
            parent::__construct($nomPatient, $numSecu, $codeMutuelle, $tauxRemboursement, $tarif);
        }
    }




?>