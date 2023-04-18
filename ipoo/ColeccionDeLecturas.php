<?php

require_once 'Lectura.php';

class ColeccionDeLecturas
{
    /** @var Lectura */
    private array $colLecturas;
 
    public function __construct(array $lecturas)
    {
     $this->colLecturas=$lecturas;  
    }
    public function getLecturas():array
    {
       return $this->colLecturas;
    }
    
    public function libroLeido($titulo):bool
    {
        $tituloLeido=$this->colLecturas;
        foreach($tituloLeido as $lecturas){
            if ($lecturas->getLibro()->getTitulo()  === $titulo) {
                return true;
            }
        }
        return false;
    }

public function getSinopsis($titulo): string{
    $tituloLeido=$this->colLecturas;
        foreach($tituloLeido as $lecturas){
            if ($lecturas->getLibro()->getTitulo()  === $titulo) {
                return $lecturas->getLibro()->getsinopsis();
            }
        }
        return $lecturas="";
       
}

public function lecturasDelAnioEdicion($anio): array{
    $lecturasDelAnio = array();
    $cont=0;
    $tituloLeido=$this->colLecturas;
        foreach($tituloLeido as $lecturas){
            $anioLibro = $lecturas->getLibro()->getAnio();
            if ( $anioLibro === $anio) {
               $lecturasDelAnio[]=$lecturas->getLibro()->getTitulo();
            }
        }
        return $lecturasDelAnio;
       
}
}
