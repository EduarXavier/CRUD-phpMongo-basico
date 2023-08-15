<?php

require_once("../controladores/UserController.php");
require_once("../modelos/User.php");

if(!empty($_GET["user"])){

    $controlador = new UserController();
    $idUsuario = $_GET["user"];

    $usuario = $controlador->verUsuario($idUsuario);
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $usuario->getNombre() ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<div style="display: flex; align-content: center;justify-content: center;">

    <div class="card" style="width: 18rem;">

        <img src="https://cdn-icons-png.flaticon.com/512/3577/3577429.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $usuario?->getNombre() ?></h5>
            <p class="card-text"><b>Telefono: </b> <?php echo $usuario?->getTelefono() ?></p>
        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
