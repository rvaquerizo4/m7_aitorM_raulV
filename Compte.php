<?php
class Compte{
    private $nom_usuari;
    private $cognom_usuari;
    private $diners;

    /**
     * @return mixed
     */
    public function getNomUsuari()
    {
        return $this->nom_usuari;
    }

    /**
     * @param mixed $nom_usuari
     */
    public function setNomUsuari($nom_usuari)
    {
        $this->nom_usuari = $nom_usuari;
    }

    /**
     * @return mixed
     */
    public function getCognomUsuari()
    {
        return $this->cognom_usuari;
    }

    /**
     * @param mixed $cognom_usuari
     */
    public function setCognomUsuari($cognom_usuari)
    {
        $this->cognom_usuari = $cognom_usuari;
    }


    /**
     * @return mixed
     */
    public function getDiners()
    {
        return $this->diners;
    }

    /**
     * @param mixed $diners
     */
    public function setDiners($diners)
    {
        $this->diners = $diners;
    }

    public function toString()
    {
        return $this->$nom_usuari . " " . $this->$cognom_usuari . " i" . $this->$diners;
    }

    public function treurediners($var){
        $aux = $diners - $var;
        $compte->setDiners($aux);
        return $aux;
    }
    public function afegirDiners($var2){
        $aux2 = $diners - $var2;
        $compte->setDiners($aux2);
        return $aux2;
    }

}

    $instancia = new Compte();
    $compte = new Compte("Raul", "Vaquerizo", 1999);

    afegirDiners(1000);                       
    echo $compte->getNomUsuari();
    echo $compte->getCognomUsuari();
    echo $compte->getDiners();

?>