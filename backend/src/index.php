<?php
namespace Raiz;
require_once('../vendor/autoload.php');

use Raiz\Models\Socio;

$persona = new Socio("Eduardo Guerra", 28372211, 105);
//echo var_dump($persona->mostrar());
echo $persona->mostrar()["nombre"]."\n";
echo $persona->mostrar()["id_socio"]."\n";


