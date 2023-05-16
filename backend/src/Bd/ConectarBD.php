<?php
namespace Raiz\Bd;
use PDO;


class ConectarBD {

    static function conectar()
    {
     $bd = new PDO('pgsql:dbname='.$_ENV["DB_NAME"].'bd', $_ENV["DB_USER"], $_ENV["DB_PASS"], options: [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
     $consulta = $bd->prepare("Select * from Socios");
     $consulta->execute();
     var_dump($consulta);
    }

}

ConectarBD::conectar();
