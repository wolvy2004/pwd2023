<?php
declare(strict_types=1);
namespace Raiz\Models;

use Raiz\Models\ModelBase;

class Persona extends ModelBase
{
    private $nombre_apellido;
    private $dni;

    function __construct(string $nombre_apellido, int $dni)
    {
        $this->nombre_apellido = $nombre_apellido;
        $this->dni = $dni;
    }

    public function setNombre($nuevoNombre)
    {
        $this->nombre_apellido = $nuevoNombre;
    }
    public function getNombre()
    {
        return $this->nombre_apellido;
    }

    public function getDNI()
    {
        return $this->dni;
    }
    
}
