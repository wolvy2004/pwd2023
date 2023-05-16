<?php
namespace Raiz\Controllers;

use Raiz\Bd\SocioDAO;
use Raiz\Models\Socio;

class SocioController implements InterfaceController{
   
    //Clase que controla de acuerdo a lo que pida la vista: 
    // --- CRUD --- 
    //  Listar 
    //  encontrar uno
    //  crear
    //  actualizar
    //  borrar  

    public static function listar(): array
    {
        $socios = [];
        $listadoSocio = SocioDAO::listar();
        foreach($listadoSocio as $Socio){
            $socios[] = $Socio->serializar();
        }
        return $socios;

        
    }
    
    public static function encontrarUno(string $id): ?array
    {
        $socio = SocioDAO::encontrarUno($id);
        if($socio===null){
            return $socio;
        }else{
            return $socio->serializar();
        }
        
        
        
    }

    public static function crear(array $parametros): array
    {
        $socio = Socio::deserializar($parametros);
        SocioDAO::crear($socio);
        return $socio->serializar();
    }

    public static function actualizar(array $parametros): array
    {
        $socio = Socio::deserializar($parametros);
        SocioDAO::actualizar($socio);
        return $socio->serializar();
    }

    public static function borrar(string $id):void
    {
        SocioDAO::borrar($id);
        
    }
    
    


}