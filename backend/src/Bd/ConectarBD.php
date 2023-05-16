<?php

namespace Raiz\Bd;

use PDO;

final class ConectarBD
{

    private static ?PDO $cxn = null;

    public static function conectar(): PDO
    {
        /*$db = "pwd2023";
        $host = "pgsql:host=192.168.20.1; port=5433; dbname=$db";
        $user = "pwduser";
        $pass = "pwdpass";*/
        $db = $_ENV['DB_NAME'];
        $host = "pgsql:host=192.168.20.1; port=5433; dbname=$db";
        $user = $_ENV['DB_USER'];
        $pass = $_ENV['DB_PASSWORD'];


        static::$cxn = new PDO(
            $host,
            $user,
            $pass,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
        return static::$cxn;
    }
    // consultar y traer registros para listar y buscar por id
    public static function leer(
        string $sql,
        array $params = [],
    ): mixed {

        $conexion = self::conectar();
        $consulta = $conexion->prepare(query: $sql);
        $consulta->execute(params: $params);
        $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $consulta->closeCursor();
        return $resultados;
    }

    // consultar y crear, actualizar y borrar registros
    public static function escribir(
        string $sql,
        array $params = [],
    ) {
        $conexion = self::conectar();
        $consulta = $conexion->prepare(query: $sql);
        $consulta->execute(params: $params);
        $consulta->closeCursor();
    }
}
