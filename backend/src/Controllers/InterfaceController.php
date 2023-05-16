<?php
namespace Raiz\Controllers;

interface InterfaceController{

    /** @return mixed[] */
    public static function listar():array;
    public static function encontrarUno(string $id):?array;
    
    // indicamos que los parametros de entrada pueden ser de cualquier tipo
    // contenidos en un array
    /** @param mixed[] $parametros */
    // igualmente el retorno sera un array de cualquier tipo en esta caso objetos
    /** @return mixed[] */
    public static function crear(array $parametros):array;
    public static function actualizar(array $parametros):array;

    public static function borrar(string $id):void;

}