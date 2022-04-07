<?php 
    require_once "app/config.php";
    require_once "app/dependencias.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=NOMBRE_TITULO?></title>
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 formulario">
                <h1 class="display3 mb-4 mt-3">Iniciar Session</h1>
                <img src="public/img/usuario (2).png" alt="" style="width: 20%">
                <form action="" method="post">
                    <div class="form-floating">
                        <input type="text" class="form-control mt-3" name="usuario" id="usuarioLogin" placeholder="usuario">
                        <label for="">Usuario</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control mt-3" name="usuario" id="passLogin" placeholder="password">
                        <label for="">Contraseña</label>
                    </div>
                    <button class="btn btn-outline-dark mt-3 mb-3 container-fluid">Iniciar session</button>
                    <!-- <a href="">¿Olvidastes tu contraseña? </a> -->
                    <!-- <br> -->
                    <a href="#modalResgitrate" data-bs-toggle="modal" data-bs-target="">Registrate</a>
                    <?php require_once "view/vista_registrarse.php" ?>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>