<?php 

namespace Raiz\Models;

Abstract class Persona{
    private $nombre;
    private $dni;

    public function __construct($nombre, $dni)
    {
        $this->nombre = $nombre;
        $this->dni = $dni;
    }
    
    public function mostrar(){
    }
    public function getNombre():string
    {
        return $this->nombre;
    }
    public function getDNI():int
    {
        return $this->dni;
    }
    

}