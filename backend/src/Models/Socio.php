<?php

namespace Raiz\Models;

class Socio extends Persona
{

    protected $id_socio;
    protected $fecha_alta;
    protected $activo;

    public function __construct($nombre, $dni, $id_socio)
    {
        parent::__construct($nombre, $dni);
        $this->id_socio = $id_socio;
        $this->fecha_alta = date_create();
    }

    public function mostrar(): array
    {
        return ["nombre"=> $this->getNombre(), "id_socio"=>$this->id_socio, "alta:"=>$this->fecha_alta];
    }
}
