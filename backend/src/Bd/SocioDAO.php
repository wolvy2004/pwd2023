<?php

namespace Raiz\Bd;

use Raiz\Aux\Serializador;
use Raiz\Bd\InterfaceDAO;
use Raiz\Models\Socio;


class SocioDAO implements InterfaceDAO
{

    public static function listar(): array
    {
        $sql = 'SELECT * FROM socios';
        $listaSocios = ConectarBD::leer(sql: $sql);
        $socios = [];
        foreach ($listaSocios as $socio) {
            $socios[] = Socio::deserializar($socio);
        }
        return $socios;
    }
    public static function encontrarUno(string $id): ?Socio
    {
        $sql = 'SELECT * FROM socios WHERE id =:id;';
        $socio = ConectarBD::leer(sql: $sql, params: [':id' => $id]);
        if (count($socio) === 0) {
           return null;
        } else {
            $socio = Socio::deserializar($socio[0]);
            return $socio;
        }
    }

    public static function crear(Serializador $instancia): void
    {
        $params = $instancia->serializar();
        $sql = 'INSERT INTO socios (id, nombre_apellido, dni) VALUES (:id, :nombre_apellido, :dni)';
        ConectarBD::escribir(
            sql: $sql,
            params: [
                ':id' => $params['id'],
                ':nombre_apellido' => $params['nombre_apellido'],
                ':dni' => $params['dni']
            ]
        );
    }

    public static function actualizar(Serializador $instancia): void
    {
        $params = $instancia->serializar();
        $sql = 'UPDATE socios SET nombre =:nombre WHERE id=:id';
        ConectarBD::escribir(
            sql: $sql,
            params: [
                ':id' => $params['id'],
                ':nombre' => $params['nombre'],
            ]
        );
    }
    public static function borrar(string $id)
    {
        $sql = 'DELETE FROM socios WHERE id=:id';
        ConectarBD::escribir(sql: $sql, params: [':id' => $id]);
    }
}
