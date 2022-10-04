<?php
class Compte{
    private $nom_usuari;
    private $cognom_usuari;
    private $diners_inicials;

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
    public function getDinersInicials()
    {
        return $this->diners_inicials;
    }

    /**
     * @param mixed $diners_inicials
     */
    public function setDinersInicials($diners_inicials)
    {
        $this->diners_inicials = $diners_inicials;
    }

    public function __toString($nom_usuari,$cognom_usuari, $diners_inicials)
    {
        return $nom_usuari." ".$cognom_usuari." i" .$diners_inicials;
    }

}
    function dades(){
        echo $this->Compte(nom_usuari.cognom_usuari.diners_inicials);
        return $this->Compte(nom_usuari.cognom_usuari.diners_inicials);
    }

    function diners($diners_inicials){
        $dinero_quitado = (rand(100,5000));
        $diners_inicials =- $dinero_quitado;
        echo $diners_inicials;
        return $diners_inicials;
    }
    function diners_finals($diners_finals)
    {
        $dinero_añadido = (rand(100, 5000));
        $diners_inicials = -$dinero_añadido;
        echo $diners_finals;
        return $diners_finals;
    }
?>