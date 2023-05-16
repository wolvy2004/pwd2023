<?php
declare(strict_types=1);

use PHPUnit\Framework\Test;
use Raiz\Models\Socio;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . "../../../../vendor/autoload.php";


final class SocioTest extends TestCase
{

    /** @test */
    public function testGetNombre()
    {
        $socio = new Socio("Manuel Salamanca", 45541500, 3);
        $nombreAvalidar = "Manuel Salamanca";
        $this->assertEquals($nombreAvalidar, $socio->getNombre());
    }
    /** @test */
    public function testSetNombre()
    {
        $socio = new Socio("Manuel Salamanca", 45541500, 3);
        $nombreNuevo = "Salamanca Manuel";
        $socio->setNombre("Salamanca Manuel");
        $this->assertEquals($nombreNuevo, $socio->getNombre());
        
    }
    /** @test */
    public function testDeserializar(): void
    {
        $socioPrueba = new Socio("eduardo guerra", 28372211, 1);
        $persona = [
            "dni" => 28372211,
            "nombre" => "eduardo guerra",
            "numSocio" => 1
        ];
        $this->assertIsArray($persona);
        $socioTest = Socio::deserializar($persona);
        $this->assertEquals($socioPrueba,$socioTest);
        $this->assertEquals($socioPrueba->getNombre(), $socioTest->getNombre(), "sucess");
        $this->assertInstanceOf("Raiz\Models\Socio", $socioTest);
        
     
    }
    /** @test */
    public function testSerializar():void
    {
        $socio = new Socio("Guillermo Santolaria", 30871212, 2);
        $arraySocio = $socio->serializar();
        //var_dump($arraySocio);
        $this->assertIsArray($arraySocio);
    }
}
