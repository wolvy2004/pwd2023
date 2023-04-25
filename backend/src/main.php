<?php
namespace Raiz;

use Raiz\Models\Socio;
use Raiz\ModelsCopia\Socio as SocioconFecha;
use function Raiz\Models\Funciones\saludar;
use const Raiz\Models\Funciones\EXITO;

require("../vendor/autoload.php");

$socio1 = new Socio("eduardo guerra", 28387411, 1);
$socio2 = new SocioconFecha("eduardo guerra", 28387411, 1, "10/02/2023");

echo EXITO;
echo $socio1->getNombre()."\n";
echo saludar();