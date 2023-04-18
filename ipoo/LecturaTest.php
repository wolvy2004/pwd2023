<?php

require_once 'Persona.php';
require_once 'Libro.php';
require_once 'Lectura.php';

class LecturaTest
{
  /** @var Libro */
  private $libro;

  public function __construct()
  {
    $persona = new Persona('Nombre', 'Apellido', 'DNI', '12345678');
    $this->libro = new Libro(
      'Librazo',
      245,
      'Sinopsis positiva',
      2019,
      $persona
    );
  }
  public function avanzaDePaginaDe0a1()
  {
    $lectura = new Lectura($this->libro);

    echo "Avanzo en la lectura:\n";
    echo "===========================================\n";

    $nuevaPagina = $lectura->siguientePagina();

    if ($nuevaPagina === 1) {
      echo 'Avanzó de página correctamente.';
    } else {
      echo 'Falló el avance de página.';
    }

    echo "\n\n";
  }

  public function intentoAvanzarMasDelFinal()
  {
    $lectura = new Lectura($this->libro);

    echo "Intento avanzar a una página fuera del límite:\n";
    echo "===========================================\n";

    $lectura->irAPagina(245);

    $nuevaPagina = $lectura->siguientePagina();

    if ($nuevaPagina === 245) {
      echo '¡Me mantuve en el final del libro!';
    } else {
      echo 'Falló el avance de página.';
    }

    echo "\n\n";
  }

  public function retrocederDesdePagina0()
  {
    $lectura = new Lectura($this->libro);

    echo "Retrocedo en la lectura desde la página 0:\n";
    echo "===========================================\n";

    $nuevaPagina = $lectura->retrocederPagina();

    if ($nuevaPagina === 0) {
      echo '¡Me mantuve en el principio del libro!';
    } else {
      echo 'Falló el retroceso de página.';
    }

    echo "\n\n";
  }

  public function retrocederDePagina()
  {
    $lectura = new Lectura($this->libro);

    echo "Retrocedo en la lectura:\n";
    echo "===========================================\n";

    $lectura->irAPagina(245);
    $nuevaPagina = $lectura->retrocederPagina();

    if ($nuevaPagina === 244) {
      echo 'Retrocedió de página correctamente.';
    } else {
      echo 'Falló el retroceso de página.';
    }

    echo "\n\n";
  }

  public function irAFueraDelLimite()
  {
    $lectura = new Lectura($this->libro);

    echo "Intento ir a una página menor a 0:\n";
    echo "===========================================\n";

    $nuevaPagina = $lectura->irAPagina(-1);

    if ($nuevaPagina === 0) {
      echo 'Me mantuve en la página actual cuando intenté ir a una página negativa.';
    } else {
      echo 'Falló el proceso de ir a página.';
    }

    echo "\n\n";
    echo "Intento ir a una página mayor al máximo:\n";
    echo "===========================================\n";

    $nuevaPagina = $lectura->irAPagina(800);

    if ($nuevaPagina === 0) {
      echo 'Me mantuve en la página actual cuando intenté ' .
        'ir a una página mayor a la cantidad que tiene el libro.';
    } else {
      echo 'Falló el proceso de ir a página.';
    }

    echo "\n\n";
  }
}

$test = new LecturaTest();

$test->avanzaDePaginaDe0a1();
$test->intentoAvanzarMasDelFinal();
$test->retrocederDesdePagina0();
$test->retrocederDePagina();
$test->irAFueraDelLimite();
