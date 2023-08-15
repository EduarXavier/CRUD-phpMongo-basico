<?php
require_once("../controladores/UserController.php");
require_once("../modelos/User.php");

$controlador = new UserController();

$usuarios = $controlador->verUsuarios();

if(!empty($_POST['id']) && !empty($_POST['nombreUpdate']) && !empty($_POST['telefonoUpdate'])){

    $id = $_POST['id'];
    $nombre = $_POST['nombreUpdate'];
    $telefono = $_POST['telefonoUpdate'];

    if($id == "null")
    {
        echo "<h2 style='color: red; text-align: center'>Por favor ingrese el usuario</h2>";
    }
    else
    {
        $controlador->updateUser($id, $nombre, $telefono);
        echo "<h2 style='color: green; text-align: center'>Usuario actualizado con éxito</h2>";
    }

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<form action="#" method="post" style="width: 50%; margin-left: 25%; margin-top: 12%">

    <div class="mb-3">
        <label for="disabledSelect" class="form-label">Persona a actualizar</label>
        <select id="disabledSelect" class="form-select" name="id">
            <option value="null">Seleccione el usuario</option>

            <?php

            foreach ($usuarios as $usuario) {

                echo "<option value='" . $usuario->getId() . "'>" . $usuario->getNombre() . " - " . $usuario->getId() . "</option>";

            }
            ?>

        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">nombre</label>
        <input type="text"  class="form-control" name="nombreUpdate">
    </div>

    <div class="mb-3">
        <label class="form-label">telefono</label>
        <input type="text"  class="form-control" name="telefonoUpdate">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>