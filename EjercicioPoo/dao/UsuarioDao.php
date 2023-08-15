<?php
require_once("../dao/Conexion.php");

use \modelos\User;
use MongoDB\BSON\ObjectID;

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

    public function verUsuario(string $id): ?User
    {
        try
        {

            $coleccion = $this->getConexion("Usuario");
            $resultado = $coleccion->findOne(['_id' => new ObjectID($id)]);

            $usuario = new User();
            $usuario->setId($resultado['_id'] ?? null);
            $usuario->setNombre($resultado['nombre'] ?? null);
            $usuario->setTelefono($resultado['telefono'] ?? null);

            return $usuario;

        }
        catch (Exception $error)
        {

            echo "Ha ocurrido un error: $error";

        }

        return null;
    }

    public function updateUser(User $usuario)
    {
        {

            $data = [
                'nombre' => $usuario->getNombre() ?? null,
                'telefono' => $usuario->getTelefono() ?? null
            ];

            try {

                $coleccion = $this->getConexion("Usuario");
                $coleccion->updateOne(['_id'=> new ObjectID($usuario->getId())], ['$set' => $data]);

            }
            catch (Exception $error){

                echo "Ha ocurrido un error: $error";

            }

        }
    }

}