<?php

require_once 'Persona.php';

class Disqueria
{
    private array $horaDesde;
    private array $horaHasta;
    private bool $estado;
    private Persona $duenio;
    private string $direccion;

    public function __construct( 
        array $horaDesde,  
        array $horaHasta, 
        bool $estado,
        string $direccion,
        Persona $duenio)
       
        
       {
           $this->horaDesde= $horaDesde;
           $this->horaHasta = $horaHasta;
           $this->estado = $estado;
           $this->duenio = $duenio;
           $this->direccion = $direccion;
           
       }
   
    public function dentroHorarioAtencion (int $hora, int $minutos):bool{
        $this->estado = true;
        // analizamos si la variable hora es mayor al elemento del arreglo horaDesde "0"
        if ($hora >= $this->horaDesde[0] ) {
            if ($minutos < $this->horaDesde[1]){
                return $this->estado=false;
            }
           // si es mayor analizamos ahora si es mayor a la hora 
            if ($hora < $this->horaHasta[0]  ) {
                 return $this->estado = true;
            }
             // si es igual analizamos ahora si es mayor a la hora   
            if ($hora === $this->horaHasta[0]  ) {
                // si es mayor analizamos ahora si es mayor a los minutos                  
                if ($minutos > $this->horaHasta[1]) {
                       
                        // si es mayor pasamos a estado Cerrado
                         return $this->estado = False;
                    }
            
                else {
                        // si es menor pasamos el estado a abierto
                      return $this->estado =true;
                    }
            }
            if ($hora > $this->horaHasta[0]  ) {
                 return $this->estado =false;
                   }  
        }
       
        // analizamos si la variable hora es menor al elemento del arreglo horaDesde "hora"   
         if ($hora < $this->horaDesde[0] )  {
             // pasamos el estado a cerrado ya que hora es menor a la hora del arreglo
           return $this->estado = false; 
         }   
        
    }
     public function AbrirNegocio(int $hora, int $minutos):bool{
        return $this->estado = $this->dentroHorarioAtencion($hora, $minutos);
        
        
     }
      
     public function cerrarNegocio(int $hora, int $minutos):bool{
        return $this->estado =$this->dentroHorarioAtencion($hora, $minutos);
     
     }

    public function getDuenio():Persona{
       return $this->duenio;
    }
    public function getHoraDesde():array{
        return $this->horaDesde;
    }
    public function getHoraHasta():array{
       return $this->horaHasta;
    }
    public function getEstado():bool{
        return $this->estado;
    }
    public function getDireccion(): string{
        return $this->direccion;
    }

    public function setDuenio($persona):Persona{
        $this->duenio=$persona;
    }
    public function setHoraDesde($horaDesdeNueva){
        $this->horaDesde=$horaDesdeNueva;
    }
    public function setHoraHasta($horaHastaNueva){
        $this->horaHasta=$horaHastaNueva;
    }
    public function setEstado($nuevoEstado){
        $this->estado=$nuevoEstado;
    }
    public function setDireccion($nuevaDir){
        $this->direccion=$nuevaDir;
    }
}
