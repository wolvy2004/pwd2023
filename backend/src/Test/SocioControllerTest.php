<?php
declare(strict_types=1);
namespace Raiz\Test;

use Monolog\Test\TestCase;
use Raiz\Bd\SocioDAO;
use Raiz\Controllers\SocioController;
use Raiz\Models\Socio;

final class SocioControllerTest extends TestCase{

    /** @Test */
    public function testCrear(){

        $socio = new Socio("Guillermo Santolaria", 32841155, 100);
        $parametros = $socio->serializar();
        SocioController::crear($parametros);
        var_dump(SocioController::listar());
        $socioEncontrado = SocioController::encontrarUno("100");
        $this->assertEquals($parametros, $socioEncontrado);
       }
     
     /** @Test */  
     /*public function testBorrar(){
        SocioController::borrar("100");
        $socioEncontrado = SocioController::encontrarUno("100");
        $this->assertNull($socioEncontrado);

     }*/

}