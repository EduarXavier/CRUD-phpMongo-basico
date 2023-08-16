<?php
$nombrePagina = "Inicio";
include_once ("EjercicioPoo/layouts/header.php")
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <img
                    src="https://w7.pngwing.com/pngs/147/128/png-transparent-computer-icons-user-profile-icon-design-add-to-cart-button-face-hand-head.png"
                    class="card-img-top"
                    width="400px"
                    height="400px"
                    alt="Imagen 1">
                <div class="card-body">
                    <h5 class="card-title">Añadir usuario</h5>
                    <a href="EjercicioPoo/vistas/vistaAddUsuario.php" class="btn btn-primary">¡vamos!</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <img
                    src="https://cdn-icons-png.flaticon.com/512/47/47748.png?w=360"
                    class="card-img-top"
                    width="400px"
                    height="400px"
                    alt="Imagen 1">
                <div class="card-body">
                    <h5 class="card-title">Ver usuarios</h5>
                    <a href="EjercicioPoo/vistas/vistaUsuarios.php" class="btn btn-primary">¡vamos!</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <img
                    src="data:image/jpeg;base64,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"
                    class="card-img-top"
                    width="400px"
                    height="400px"
                    alt="Imagen 1">
                <div class="card-body">
                    <h5 class="card-title">ActualizarUsuario</h5>
                    <a href="EjercicioPoo/vistas/vistaUpdateUsuario.php" class="btn btn-primary">¡vamos!</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <img
                    src="https://cdn.icon-icons.com/icons2/20/PNG/256/delete_delete_deleteusers_delete_male_user_maleclient_2348.png"
                    class="card-img-top"
                    width="400px"
                    height="400px"
                    alt="Imagen 1">
                <div class="card-body">
                    <h5 class="card-title">Eliminar usuario</h5>
                    <a href="EjercicioPoo/vistas/vistaDeleteUser.php" class="btn btn-primary">¡vamos!</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include_once ("EjercicioPoo/layouts/footer.php")
?>