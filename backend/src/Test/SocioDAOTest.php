<?php
declare(strict_types=1);
namespace Raiz\Test;

use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestCase;
use Raiz\Bd\SocioDAO;
use Raiz\Models\Socio;

final class SocioDAOTest extends TestCase{

    /**@test */

    public function testConexion(){
        $socio = new Socio("Miguel Mateos", 48512241, 2);        
        //$socio = new Socio("Pablo Ruiz", 27841251, 2);
        $this->assertInstanceOf("Raiz\Models\Socio", $socio);
        SocioDAO::crear($socio);
        $socioEncontrado[] = SocioDAO::encontrarUno("2");
        $this->assertCount(1,$socioEncontrado);
        $socio = new Socio("Miguel Angel Mateos", 48512241, 2);
        SocioDAO::actualizar($socio);
        $this->assertEquals("Miguel Angel Mateos", $socio->getNombre());
        SocioDAO::borrar("2");
        $socioBorrado = SocioDAO::encontrarUno("2");
        $this->assertNull($socioBorrado);
        
 
    }

}
