<?php

require '../../vendor/autoload.php';

use MongoDB\Client;

class Conexion
{
    public function getConexion(string $coleccion)
    {

        try
        {

            $clienteMongo = new Client("mongodb://localhost:27017/");
            $baseDatos = $clienteMongo->selectDatabase('pruebaMongo');

            return $baseDatos?->selectCollection($coleccion) ?? throw new Exception("Debe ingresar una colección");

        }
        catch (Exception $error)
        {
            echo "Ha ocurrido este error $error";
        }


    }

}