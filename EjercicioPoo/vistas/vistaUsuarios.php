<?php
    $nombrePagina = "Usuarios";
    include_once("../layouts/header.php");
?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">nombre</th>
        <th scope="col">Telefono</th>
    </tr>
    </thead>
    <tbody>

        <?php

        require_once("../controladores/UserController.php");
        require_once("../modelos/User.php");

        $controlador = new UserController();

        $usuarios = $controlador->verUsuarios();

        foreach ($usuarios as $usuario):
        ?>
        <tr>

            <td>
                <?php echo $usuario->getId() ?
                    "<a href='vistaUserDetails.php?user=".$usuario->getId()."'>".$usuario->getId()."</a>"
                    : "" ;
                ?>
            </td>
            <td><?php echo $usuario->getNombre() ? $usuario->getNombre() : "" ?></td>
            <td><?php echo $usuario->getTelefono() ? $usuario->getTelefono() : "No tiene" ?></td>
        </tr>
        <?php endforeach;?>


    </tbody>
</table>

<?php

    include_once("../layouts/footer.php")

?>