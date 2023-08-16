<?php

require_once("../controladores/UserController.php");
require_once("../modelos/User.php");

if(!empty($_GET["user"]))
{

    $controlador = new UserController();
    $idUsuario = $_GET["user"];

    $usuario = $controlador->verUsuario($idUsuario);
    $nombrePagina = $usuario->getNombre();
    include_once("../layouts/header.php");
}
else
{
    header("Location: http://localhost/proyectosPhpStorm/pruebasLirbo/index.php");
    exit;
}


?>

<div style="display: flex; align-content: center;justify-content: center;">

    <div class="card" style="width: 18rem;">

        <img src="https://cdn-icons-png.flaticon.com/512/3577/3577429.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $usuario?->getNombre() ?></h5>
            <p class="card-text"><b>Telefono: </b> <?php echo $usuario?->getTelefono() ?></p>
        </div>

    </div>

</div>

<?php

include_once("../layouts/footer.php")

?>