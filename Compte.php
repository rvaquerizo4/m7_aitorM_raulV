<?php
class Compte{
    private $nom_usuari;
    private $cognom_usuari;
    private $diners_inicials;
    private $diners_finals;

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

     /**
     * @return mixed
     */
    public function getDinersFinals()
    {
        return $this->diners_finals;
    }

    /**
     * @param mixed $diners_finals
     */
    public function setDinersFinals($diners_finals)
    {
        $this->diners_finals = $diners_finals;
    }

    public function toString()
    {
        return $this->$nom_usuari . " " . $this->$cognom_usuari . " i" . $this->$diners_inicials;
    }

}

    $instancia = new Compte();

    $compte = 'Compte';
    $compte = new compte("Raul", "Vaquerizo", 1999);// new ClaseSencilla()


    function diners($diners_inicials){
        $dinero_quitado = (rand(100,5000));
        $diners_finals = $diners_finals - $dinero_quitado;
        echo $diners_finals;
        return $diners_finals;
    }
    function diners_finals($diners_finals)
    {
        $dinero_añadido = (rand(100, 5000));
        $diners_finals = $diners_finals + $dinero_añadido;
        echo $diners_finals;
        return $diners_finals;
    }
?>