<?php
class Vehicle{
    private $marca;
    private $modelo;
    private $num_serie;
    private $peso;
    private $combustible;

    /**
     * @return mixed
     */
    public function getCombustible()
    {
        return $this->combustible;
    }

    /**
     * @param mixed $combustible
     */
    public function setCombustible($combustible)
    {
        $this->combustible = $combustible;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }


    /**
     * @return mixed
     */
    public function getNumSerie()
    {
        return $this->num_serie;
    }

    /**
     * @param mixed $num_serie
     */
    public function setNumSerie($num_serie)
    {
        $this->num_serie = $num_serie;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }

    function kmRecorregut(){
        $km = rand(int 0, int 100): int;
        return km;
    }

    function vehicleCreat($marca){
        $cavalls = rand(int 0, int 100): int;
        return "vehicle es ".$marca. "i té ".$cavalls;
    }

}
?>