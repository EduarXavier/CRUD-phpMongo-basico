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

    public function verUsuario() : ?array
    {
        $usuarios = $this->usuarioDao?->verUsuarios();

        return $usuarios ?? null;

    }
}