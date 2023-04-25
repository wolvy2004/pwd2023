<?php 
namespace raiz\Models;

Abstract class Persona{
    private $nombre;
    private $dni;

    function __construct($nombre, $dni)
    {
        $this->nombre = $nombre;
        $this->dni = $dni;
    }

    public function setNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getDNI(){
        return $this->dni;
    }
}