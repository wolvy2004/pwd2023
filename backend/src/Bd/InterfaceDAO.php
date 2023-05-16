<?php
namespace Raiz\Bd;

use Raiz\Aux\Serializador;
use Raiz\Models\ModelBase;

interface InterfaceDao{

    public static function listar():array;
    public static function encontrarUno(string $id):?ModelBase;
    public static function crear(Serializador $instancia);
    public static function actualizar(Serializador $instancia);
    public static function borrar(string $id);

}