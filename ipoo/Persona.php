<?php

class Persona
{
    private string $nombre;
    private string $apellido;
    private string $tipoDNI;
    private int $dni;

    public function __construct(
        string $nombre,
        string $apellido,
        string $tipoDNI,
        int $dni
    ) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->tipoDNI = $tipoDNI;
        $this->dni = $dni;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getApellido(): string
    {
        return $this->apellido;
    }
    public function getTipoDni(): string
    {
        return $this->tipoDNI;
    }
    public function getDNI(): int
    {
        return $this->dni;
    }
    public function setNombre($nombre) 
    {
        $this->nombre=$nombre;
    }
    public function setApellido($apellido) 
    {
        $this->apellido=$apellido;
    }
    
    
   
}
