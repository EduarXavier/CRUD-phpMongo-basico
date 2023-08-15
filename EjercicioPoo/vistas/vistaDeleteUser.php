<?php
require_once("../controladores/UserController.php");
require_once("../modelos/User.php");

$controlador = new UserController();

$usuarios = $controlador->verUsuarios();

$usuarioAEliminar = "";

if(!empty($_POST['id']) && $_POST['id'] != "null"){

    $id = $_POST['id'];

    $usuarioAEliminar = $controlador->verUsuario($id) ?? "";

    if (isset($_POST['confirmar'])) {

        $controlador->deleteUser($id);
        echo "<h2 style='color: green; text-align: center'>Usuario eliminado con éxito</h2>";
        $usuarioAEliminar = "";
    }

}
else{

    echo "<h2 style='color: red; text-align: center'>Por favor ingrese el usuario</h2>";

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eliminar Usuario</title>
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

    <?php if ($usuarioAEliminar != "") : ?>
        <div class="mb-3">
            <label for="confirmar" class="form-label">¿Está seguro de eliminar a <?= $usuarioAEliminar->getNombre() ?>?</label>
            <br>
            <input type="hidden" name="id" value="<?= $usuarioAEliminar->getId() ?>">
            <button type="submit" name="confirmar" class="btn btn-danger">Confirmar Eliminación</button>
            <a href="vistaDeleteUser.php" class="btn btn-secondary" id="cancel-button">Cancelar</a>
        </div>
    <?php endif; ?>

    <?php if ($usuarioAEliminar == "") : ?>
        <button type="submit" class="btn btn-danger">Eliminar</button>
    <?php endif; ?>

</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>