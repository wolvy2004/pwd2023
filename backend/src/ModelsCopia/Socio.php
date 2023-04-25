<?php
namespace Raiz\ModelsCopia;
use Raiz\Models\Persona;

class Socio extends Persona{
    private $numSocio;
    private $fechaIngreso;

    function __construct($nombre, $dni, $numSocio, $fechaIngreso)
    {
        parent::__construct($nombre, $dni);
        $this->numSocio = $numSocio;
        $this->fechaIngreso = $fechaIngreso;
    }

    public function setNumSocio($nuevoNumSocio){
        $this->numSocio = $nuevoNumSocio;
    }
    public function getNumSocio(){
        return $this->numSocio;
    }

}