<?php

    class ActeNonConventionne extends ActeMedical{

        private $honorairesSupp;

        function __construct(string $nom, int $num, int $code, float $tx = 0.4, $hono) {
            parent::__construct($nom, $num, $code, $tx);
            $this->honorairesSupp = $hono;
        }

        
    }




?>