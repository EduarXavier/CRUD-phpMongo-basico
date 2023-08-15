<?php
require_once("../dao/Conexion.php");

use \modelos\User;

class UsuarioDao extends Conexion implements IUsuarioDao
{

    public function addUser(User $usuario): ?bool
    {

        $data = [
            'nombre' => $usuario->getNombre() ?? null,
            'telefono' => $usuario->getTelefono() ?? null
        ];

        try {

            $coleccion = $this->getConexion("Usuario");
            $resultado =$coleccion->insertOne($data);

        }
        catch (Exception $error){

            echo "Ha ocurrido un error: $error";

        }

        return $resultado ? true : false;

    }

    public function verUsuarios(): ?array
    {
        try
        {

            $coleccion = $this->getConexion("Usuario");
            $resultados = $coleccion->find([]);
            $usuarios = [];

            foreach ($resultados as $resultado){

                $usuario = new User();
                $usuario->setId($resultado['_id'] ?? null);
                $usuario->setNombre($resultado['nombre'] ?? null);
                $usuario->setTelefono($resultado['telefono'] ?? null);

                $usuarios[] = $usuario;
            }

            return $usuarios ?? null;

        }
        catch (Exception $error)
        {

            echo "Ha ocurrido un error: $error";

        }

        return null;
    }

    public function verUsuario(int $id): ?int
    {
        return null;
    }
}