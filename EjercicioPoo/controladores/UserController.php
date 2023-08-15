<?php

require_once("../dao/IUsuarioDao.php");
require_once("../dao/UsuarioDao.php");

use modelos\User;

class UserController
{

    public function __construct(
        private readonly IUsuarioDao $usuarioDao = new UsuarioDao()
    )
    {
    }

    public  function addUser(string $nombre, string $telefono): ?bool
    {
        $user = new User();
        $user->setNombre($nombre);
        $user->setTelefono($telefono);

        $respuesta = $this->usuarioDao->addUser($user);

        return $respuesta;
    }

    public function verUsuarios() : ?array
    {
        $usuarios = $this->usuarioDao?->verUsuarios();

        return $usuarios ?? null;

    }

    public function verUsuario(string $id) : ?User
    {
        $usuario = $this->usuarioDao?->verUsuario($id);

        return $usuario ?? null;

    }

    public  function updateUser(String $id, string $nombre, string $telefono){

        $user = new User();
        $user->setId($id);
        $user->setNombre($nombre);
        $user->setTelefono($telefono);

        $this->usuarioDao->updateUser($user);

    }

}