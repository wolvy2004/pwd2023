<?php

require_once './Persona.php';

class Libro
{
    private string $titulo;
    private int $totalPaginas;
    private string $sinopsis;
    private int $anio;
    private persona $autor;

     public function __construct
     ( string $titulo,
      int $totalPaginas,
      string $sinopsis,
      int $anio,
      persona $autor)
    {
        $this->titulo = $titulo;
        $this->totalPaginas = $totalPaginas;
        $this->sinopsis = $sinopsis;
        $this->anio = $anio;
        $this->autor = $autor;
    }
    function getTitulo(){
        return $this->titulo;
    }
    public function getTtalPag():int{
        return $this->totalPaginas;
    }
    public function getSinopsis():string{
        return $this->sinopsis;
    }
    public function getAnio():int{
        return $this->anio;
    }
    public function getAutor():Persona{
        return $this->autor;
    }
    function setTitulo($titulo):string{
        return $this->titulo=$titulo;
    }
    public function setTtalPag($TtalPag):int{
        return $this->totalPaginas=$TtalPag;
    }
    public function setSinopsis($sinopsis):string{
        return $this->sinopsis=$sinopsis;
    }
    public function setAnio($anio):int{
        return $this->anio=$anio;
    }
    public function setAutor(){
        return $this->autor;
    }
}

