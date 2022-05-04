<?php 
    session_start();
    require_once "../app/config.php";
    require_once "../app/dependencias.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="icon" href="../public/img/icons8-libros-100.png" type="image/svg+xml">
</head>
<body>
    <header>
        <?php require_once "./main/nav.php"?>
    </header>
    <h1 class="text-light text-center mt-3 mb-5">¿quienes somos?</h1>
    <div class="container tarjetaFlotante mb-5">
        <div class="row">
            <div class="col">
                <div class="tarjeta">
                    <div class="imagen">
                        <img src="../public/img/Danny.jpg" alt="">
                    </div>
                    <div class="contenido">
                        <div class="detalles">
                            <h2>
                                Daniel   
                                <br>
                                <span>Desarrollador Web Junior</span>
                            </h2>
                            <div class="datos">
                                <h3>vengo <br><span>ITMA II</span></h3>
                                <h3>vengo <br><span>ITMA II</span></h3>
                                <h3>vengo <br><span>ITMA II</span></h3>
                            </div>
                            <div class="paginas">
                                <a href="https://github.com/Danx398" target="_blank">Mi Git Hub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="tarjeta">
                    <div class="imagen">
                        <img src="../public/img/faty.jpg" alt="">
                    </div>
                    <div class="contenido">
                        <div class="detalles">
                            <h2>
                                Fatima Andrea 
                                <br>
                                <span>Desarrollador Web Junior</span>
                            </h2>
                            <div class="datos">
                                <h3>vengo <br><span>ITMA II</span></h3>
                                <h3>vengo <br><span>ITMA II</span></h3>
                                <h3>vengo <br><span>ITMA II</span></h3>
                            </div>
                            <div class="paginas">
                                <a href="https://github.com/FatyBp" target="_blank">Mi Git Hub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="tarjeta">
                    <div class="imagen">
                        <img src="../public/img/Joss.jpg" alt="">
                    </div>
                    <div class="contenido">
                        <div class="detalles">
                            <h2>
                                Jose Alberto 
                                <br>
                                <span>Desarrollador Web Junior</span>
                            </h2>
                            <div class="datos">
                                <h3>vengo <br><span>ITMA II</span></h3>
                                <h3>vengo <br><span>ITMA II</span></h3>
                                <h3>vengo <br><span>ITMA II</span></h3>
                            </div>
                            <div class="paginas">
                                <a href="https://github.com/JossRV" target="_blank">Mi Git Hub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
    <footer>
        <?php require_once "./main/footerwaves.php"?>
    </footer>
</body>
</html>