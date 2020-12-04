<?php

abstract class ActeMedical implements Transmettre {

    protected $nomPatient;
    protected $numSecu;
    protected $codeMutuelle;
    protected $tauxRemboursement;
    protected static $tarif = 25;

    // $this->nomPatient; 
    // ActeMedical::$tarif;
    // Self::$tarif; 

    public function __construct(string $nom, int $num, int $code, float $tx) {
        $this->nomPatient = $nom;
        $this->numSecu = $num;
        $this->codeMutuelle = $code;
        $this->tauxRemboursement = $tx;
    }




    function caracteristiques() {
        return $this->nomPatient . " devra payer le tarif de " . $this->tarif . "€" . "." . "<br>";
    }


    public function prescrire(): string {
        return "Paracetamol 1000mg". " <br>";
    }


    public function facturer(): float{

        return Self::$tarif;
    }

    public abstract function dispenseAvanceFrais(): float;


    /**
     * SETTER (mutateur) de la propriété $nom : 
     * @param string $nomperso : Nouveau nom à donner à ce personnage
     */
    function setnomPatient(string $nomPatient) {
        $this->nomPatient = $nomPatient;
    }

    /**
     * GETTER (accesseur) de la propriété $nom : 
     * @return string : Retourne la valeur de la propriété $nom
     */
    function getnomPatient() {
        return $this->nomPatient;
    }


    /**
     * SETTER (mutateur) de la propriété $nom : 
     * @param string $nomperso : Nouveau nom à donner à ce personnage
     */
    function setnomnumSecu(string $numSecu) {
        $this->numSecu = $numSecu;
    }

    /**
     * GETTER (accesseur) de la propriété $nom : 
     * @return string : Retourne la valeur de la propriété $nom
     */
    function getnumSecu() {
        return $this->numSecu;
    }


    /**
     * SETTER (mutateur) de la propriété $nom : 
     * @param string $nomperso : Nouveau nom à donner à ce personnage
     */
    function setcodeMutuelle(string $codeMutuelle) {
        $this->codeMutuelle = $codeMutuelle;
    }

    /**
     * GETTER (accesseur) de la propriété $nom : 
     * @return string : Retourne la valeur de la propriété $nom
     */
    function getcodeMutuellet() {
        return $this->codeMutuelle;
    }


    /**
     * SETTER (mutateur) de la propriété $nom : 
     * @param string $nomperso : Nouveau nom à donner à ce personnage
     */
    function settauxRemboursement(string $tauxRemboursement) {
        $this->tauxRemboursement = $tauxRemboursement;
    }

    /**
     * GETTER (accesseur) de la propriété $nom : 
     * @return string : Retourne la valeur de la propriété $nom
     */
    function gettauxRemboursement() {
        return $this->tauxRemboursement;
    }


    /**
     * SETTER (mutateur) de la propriété $nom : 
     * @param string $nomperso : Nouveau nom à donner à ce personnage
     */
    function settarif(string $tarif) {
        $this->tarif = $tarif;
    }

    /**
     * GETTER (accesseur) de la propriété $nom : 
     * @return string : Retourne la valeur de la propriété $nom
     */
    function gettarif() {
        return $this->tarif;
    }


}
?>