<?php

namespace Raiz\Models;

use Raiz\Aux\Serializador;
use Error;

abstract class ModelBase implements Serializador
{
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
