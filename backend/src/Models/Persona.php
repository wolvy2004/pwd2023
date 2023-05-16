<?php
declare(strict_types=1);
namespace Raiz\Models;

use Raiz\Aux\Serializador;
use Error;

abstract class Persona implements Serializador
{
    private $nombre;
    private $dni;

    function __construct(string $nombre, int $dni)
    {
        $this->nombre = $nombre;
        $this->dni = $dni;
    }

    public function setNombre($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDNI()
    {
        return $this->dni;
    }
    /** @return mixed[] */
    public function serializar(): array
    {
        throw new Error('Serialización no implementada.');
    }

    /** @param mixed[] $datos */
    public static function deserializar(array $datos):Self
    {
        throw new Error('Deserialización no implementada.');
    }
}
