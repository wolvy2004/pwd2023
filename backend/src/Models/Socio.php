<?php
declare(strict_types=1);
namespace Raiz\Models;

class Socio extends Persona{
    
    private $numSocio;

    function __construct(string $nombre, int $dni, int $numSocio)
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
     /** @return mixed[] */
    public function serializar():array
    {
       return [
        "dni" => $this->getDNI(),
        "nombre" => $this->getNombre(),
        "numSocio"=>$this->getNumSocio()
       ];
            
    }
         /** @return Socio */
    public static function deserializar(array $datos): Self
    {
        return new Socio(
            dni: $datos["dni"],
            nombre: $datos["nombre"],
            numSocio: $datos["numSocio"]

        );
    }

}