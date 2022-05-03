<nav>
    <div class="navegacion">
        <div class="menu_desplegable"></div>
        <div class="perfil">
            <!-- <div class="img"> -->
            <span class="usuario"> <?=$_SESSION['usuario'] ?></span>
            <!-- </div> -->
        </div>
        <ul class="menu">
            <li>
                <a href="./inicio.php">
                    <span class="icono"><i class="fa-duotone fa-books"></i></span>
                    <span class="texto">Inicio</span>
                </a>
            </li>
            <li>
                <a href="../view/tarjetaPerfil.php">
                    <span class="icono"><i class="fa-duotone fa-people-group"></i></span>
                    <span class="texto">Nosotros</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icono"><i class="fa-duotone fa-user"></i></span>
                    <span class="texto">Perfil</span>
                </a>
            </li>
            <li>
                <a href="../procesos/usuarios/salir.php">
                    <span class="icono"><i class="fa-duotone fa-arrow-right-from-bracket"></i></span>
                    <span class="texto">Salir</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

