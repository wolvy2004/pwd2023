<?php

namespace Raiz\Models;

use Raiz\Aux\Serializador;
use Error;

abstract class ModelBase implements Serializador

{   
    private $id;
    public function setId($id): mixed
    {
        if ($id === null) :
            return 0;
        else :
            return intVal($id);
        endif;
    }

    public function __construct(mixed $id)
    {
        $this->id=$this->setId($id);
    }

    public function getId(): int
    {
        return $this->id;
    }
    /** @return mixed[] */
    public function serializar(): array
    {
        throw new Error('Serialización no implementada.');
    }

    /** @param mixed[] $datos */
    public static function deserializar(array $datos): Self
    {
        throw new Error('Deserialización no implementada.');
    }
}
