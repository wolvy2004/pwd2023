<?php

require_once 'class/Libro.php';

class Lectura

{
    /** @var Libro */
    private $nuevoLibro;
    private int $NumeropaginaActual;

    public function __construct(Libro $libro)
    {
        $this->nuevoLibro = $libro;
        $this->NumeropaginaActual = 0;
    }

    public function siguientePagina(): int
    {
        return $paginaActual = $this->NumeropaginaActual + 1;
    }
    public function retrocederPagina()
    {

        return $paginaActual = $this->NumeropaginaActual -1;
    }


    public function irAPagina(int $pagina): int
    {
        $totalpaginas = $this->nuevoLibro->getTtalPag();

        if ($pagina > $totalpaginas or $pagina < 0) {
            return $paginaActual = $this->NumeropaginaActual;
        } else {
           $this->setPaginaActual($pagina);
           return $paginaActual = $pagina;
        }
    }

    public function getLibro(): Libro
    {
        return $this->nuevoLibro;
    }

    public function getPaginaActual(): int
    {
        return $this->NumeropaginaActual;
    }

   
    public function setPaginaActual($nuevaPagina)
    {
        $this->NumeropaginaActual=$nuevaPagina;
    }
}
