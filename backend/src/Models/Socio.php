<?php
namespace raiz\Models;

class Socio extends Persona{
    private $numSocio;

    function __construct($nombre, $dni, $numSocio)
    {
        parent::__construct($nombre, $dni);
        $this->numSocio = $numSocio;
    }

    public function setNumSocio($nuevoNumSocio){
        $this->numSocio = $nuevoNumSocio;
    }
    public function getNumSocio(){
        return $this->numSocio;
    }

}