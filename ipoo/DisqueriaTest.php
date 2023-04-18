<?php

require_once 'Disqueria.php';

class TestDisqueria
{
  public static function constructorRecibeParametrosEsperados()
  {
    $persona = new Persona('Nombre', 'Apellido', 'DNI', 12345678);

    new Disqueria([8, 0], [19, 30], true, 'Una direccion 1235', $persona);
  }

  public static function funcionaVerificacionDentroDeHorario()
  {
    $persona = new Persona('Nombre', 'Apellido', 'DNI', '12345678');
    $disqueria = new Disqueria(
      [8, 0],
      [19, 30],
      true,
      'Una direccion 1235',
      $persona
    );

    echo "Funciona la verificación del horario:\n";
    echo "=============================================================\n";

    if ($disqueria->dentroHorarioAtencion(8, 0)) {
      $estado = 'Correcto';
    } else {
      $estado = 'Incorrecto';
    }

    echo "- [08:00] {$estado}\n";

    if ($disqueria->dentroHorarioAtencion(19, 30)) {
      $estado = 'Correcto';
    } else {
      $estado = 'Incorrecto';
    }

    echo "- [19:30] {$estado}\n";

    if ($disqueria->dentroHorarioAtencion(23, 59)) {
      $estado = 'Incorrecto';
    } else {
      $estado = 'Correcto';
    }

    echo "- [23:59] {$estado}\n";

    if ($disqueria->dentroHorarioAtencion(15, 23)) {
      $estado = 'Correcto';
    } else {
      $estado = 'Incorrecto';
    }

    echo "- [15:23] {$estado}\n\n";
  }

  public static function abrirYCerrarNegocio()
  {
    $persona = new Persona('Nombre', 'Apellido', 'DNI', '12345678');
    $disqueria = new Disqueria(
      [8, 0],
      [19, 30],
      // Inicia cerrada
      false,
      'Una direccion 1235',
      $persona
    );

    echo "Funciona la apertura y cierre de la disquería:\n";
    echo "=============================================================\n";

    

    if ($disqueria->abrirNegocio(8, 0)) {
      echo 'Se abrió la disquería';
    } else {
      echo 'Hubo algún problema al intentar abrir la disquería';
    }

    echo "\n";

    

    if ($disqueria->cerrarNegocio(23, 59)) {
      echo "Hubo algún problema al intentar abrir la disquería";
     
    } else {
      echo 'Se cerró la disquería';
    }

    echo "\n\n";
  }
}

TestDisqueria::constructorRecibeParametrosEsperados();
TestDisqueria::funcionaVerificacionDentroDeHorario();
TestDisqueria::abrirYCerrarNegocio();
