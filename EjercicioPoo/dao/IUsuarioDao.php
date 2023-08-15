<?php

require_once("../modelos/User.php");

use \modelos\User;
interface IUsuarioDao
{

    public function addUser(User $usuario): ?bool;
    public function verUsuarios(): ?array;
    public function verUsuario(int $id): ?int;

}
