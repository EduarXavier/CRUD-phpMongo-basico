<?php

$nombrePagina = "Añadir usuario";
include_once("../layouts/header.php");

require_once("../controladores/UserController.php");
require_once("../modelos/User.php");

$controlador = new UserController();

if(!empty($_POST['nombre']) && !empty($_POST['telefono']))
{

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];

    echo $controlador->addUser($nombre, $telefono) ?
        "<h2 style='text-align: center; color: green'>La persona fue registrada con éxito</h2>"
        :
        "<h2 style='text-align: center; color: Red'>Ha ocurrido un error</h2>";
}
else if(!empty($_POST['nombre']) || !empty($_POST['telefono']))
{
    echo "<h2 style='text-align: center; color: Red'>Ingrese todos los datos</h2>";
}

?>

<form action="#" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">nombre</label>
        <input type="text" class="form-control" name="nombre">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="telefono">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

