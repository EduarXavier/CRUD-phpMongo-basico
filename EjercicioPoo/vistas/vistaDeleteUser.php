<?php

$nombrePagina = "Eliminar usuario";
include_once("../layouts/header.php");

require_once("../controladores/UserController.php");
require_once("../modelos/User.php");

$controlador = new UserController();

$usuarios = $controlador->verUsuarios();

$usuarioAEliminar = "";

if(!empty($_POST['id']) && $_POST['id'] != "null")
{
    $id = $_POST['id'];

    $usuarioAEliminar = $controlador->verUsuario($id) ?? "";

    if (isset($_POST['confirmar']))
    {
        $controlador->deleteUser($id);
        echo "<h2 style='color: green; text-align: center'>Usuario eliminado con éxito</h2>";
        $usuarioAEliminar = "";
    }

}
 else if(!empty($_POST['id'])){

     echo "<h2 style='color: red; text-align: center'>Por favor ingrese el usuario</h2>";

 }



?>

<form action="#" method="post" style="width: 50%; margin-left: 25%; margin-top: 12%">

    <div class="mb-3">
        <label for="disabledSelect" class="form-label">Persona a eliminar</label>
        <select id="disabledSelect" class="form-select" name="id">
            <option value="null">Seleccione el usuario</option>

            <?php

            foreach ($usuarios as $usuario)
            {
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

<?php

include_once("../layouts/footer.php");

?>