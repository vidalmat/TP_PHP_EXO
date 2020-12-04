<?php

    class ActeNonConventionne extends ActeMedical{

        private $honorairesSupp;

        function __construct(string $nom, int $num, int $code, float $tx = 0.7, $hono) {
            parent::__construct($nom, $num, $code, $tx);
            $this->honorairesSupp = $hono;
        }

        public function facturer(): float{

            return Self::$tarif + $this->honorairesSupp;
        }
        
        
        public function dispenseAvanceFrais(): float{
            return Self::$tarif - Self::$tarif * $this->tauxRemboursement + $this->honorairesSupp;
        }
    
    }




?>