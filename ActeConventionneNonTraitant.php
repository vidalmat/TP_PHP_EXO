<?php

    class ActeConventionneNonTraitant extends ActeMedical{

        function __construct(string $nom, int $num, int $code, float $tx = 0.4) {
            parent::__construct($nom, $num, $code, $tx);
        }

        
            
        }




?>