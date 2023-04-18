<?php

require_once 'Persona.php';
require_once 'Libro.php';
require_once 'ColeccionDeLecturas.php';

class ColeccionDeLecturasTest
{
  /** @var ColeccionDeLecturas */
  private $coleccion;

  public function __construct()
  {
    $autor1 = new Persona(
      'Nombre autor 1',
      'Apellido autor 1',
      'dni',
      '11111111'
    );
    $autor2 = new Persona(
      'Nombre autor 2',
      'Apellido autor 2',
      'dni',
      '22222222'
    );

    $this->coleccion = new ColeccionDeLecturas([
      new Lectura(
        new Libro('Libro 1', 120, 'Sinopsis del libro 1', 1990, $autor1)
      ),
      new Lectura(
        new Libro('Libro 2', 200, 'Sinopsis del libro 2', 1993, $autor1)
      ),
      new Lectura(
        new Libro('Libro 3', 300, 'Sinopsis del libro 3', 1990, $autor2)
      ),
      new Lectura(
        new Libro('Libro 4', 300, 'Sinopsis del libro 4', 1990, $autor1)
      ),
      new Lectura(
        new Libro('Libro 5', 300, 'Sinopsis del libro 5', 1990, $autor2)
      ),
      new Lectura(
        new Libro('Libro 6', 300, 'Sinopsis del libro 6', 1993, $autor1)
      ),
      new Lectura(
        new Libro('Libro 7', 300, 'Sinopsis del libro 7', 1991, $autor2)
      ),
      new Lectura(
        new Libro('Libro 8', 300, 'Sinopsis del libro 8', 1991, $autor2)
      ),
      new Lectura(
        new Libro('Libro 9', 300, 'Sinopsis del libro 9', 1990, $autor1)
      ),
      new Lectura(
        new Libro('Libro 10', 300, 'Sinopsis del libro 10', 1990, $autor2)
      ),
    ]);
  }

  public function buscoUnLibroQueExista()
  {
    echo "Busco un libro que exista:\n";
    echo "===========================================\n";

    if ($this->coleccion->libroLeido('Libro 10')) {
      echo '¡Encontró el libro!';
    } else {
      echo 'Falló la búsqueda del libro';
    }

    echo "\n\n";
  }

  public function buscoUnLibroQueNoExista()
  {
    echo "Busco un libro que no exista:\n";
    echo "===========================================\n";

    if ($this->coleccion->libroLeido('Libro 32')) {
      echo '¡¿Encontró... el libro?! ¡ERROR ERROR Código rojo!';
    } else {
      echo '¡No encontró el libro! (Claro, si no estaba)';
    }

    echo "\n\n";
  }

  public function buscoSinopsisQueExista()
  {
    echo "Busco una sinopsis de un libro que exista:\n";
    echo "===========================================\n";

    $sinopsis = $this->coleccion->getSinopsis('Libro 10');

    if ($sinopsis != null) {
      echo "Sinopsis: {$sinopsis}";
    } else {
      echo 'Falló la búsqueda del libro';
    }

    echo "\n\n";
  }

  public function buscoSinopsisQueNoExista()
  {
    echo "Busco una sinopsis de un libro que no exista:\n";
    echo "===========================================\n";

    $sinopsis = $this->coleccion->getSinopsis('Libro 32');

    if ($sinopsis == null) {
      echo '¡No encontró el libro! (Claro, si no estaba)';
    } else {
      echo '¡¿Encontró... el libro?! ¡ERROR ERROR Código rojo!';
    }

    echo "\n\n";
  }

  public function recuperoLosLibrosDeUnAnioDeEdicion()
  {
    echo "Recupero los libros de un año de edición:\n";
    echo "===========================================\n";

    $libros = $this->coleccion->lecturasDelAnioEdicion(1990);

    if (count($libros) < 5) {
      echo 'Error: No encontró todos los libros';
    } else {
      echo 'Éxito: ¡Encontró todos los libros!';
    }

    echo "\n\n";
  }

  public function noRecuperoNingunoPorqueNoHay()
  {
    echo "Recupero los libros de un año de edición:\n";
    echo "===========================================\n";

    $libros = $this->coleccion->lecturasDelAnioEdicion(2222);

    if (count($libros) > 0) {
      echo '¡¿Encontró... el libro?! ¡ERROR ERROR Código rojo!';
    } else {
      echo 'Éxito: ¡no encontró ningún libro!';
    }

    echo "\n\n";
  }
}

$test = new ColeccionDeLecturasTest();

$test->buscoUnLibroQueExista();
$test->buscoUnLibroQueNoExista();

$test->buscoSinopsisQueExista();
$test->buscoSinopsisQueNoExista();

$test->recuperoLosLibrosDeUnAnioDeEdicion();
$test->noRecuperoNingunoPorqueNoHay();
