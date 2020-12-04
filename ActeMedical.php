<?php

abstract class ActeMedical /*implements*/ {

    protected $nomPatient;
    protected $numSecu;
    protected $codeMutuelle;
    protected $tauxRemboursement;
    protected $tarif;



    function __construct(string $nomPatient, int $numSecu, int $codeMutuelle, $tauxRemboursement, int $tarif = 25) {
        $this->nomPatient = $nomPatient;
        $this->numSecu = $numSecu;
        $this->codeMutuelle = $codeMutuelle;
        $this->tauxRemboursement = $tauxRemboursement;
        $this->tarif = $tarif;
    }




    function caracteristiques() {
        return "Je suis " . $this->nomPatient . " et le tarif à payer est de " . $this->tarif ."<br>";
    }


    function prescrire(){

    }


    function facturer($payer){

        $this->tarif += $payer;

    }

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