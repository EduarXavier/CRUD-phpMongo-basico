<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
