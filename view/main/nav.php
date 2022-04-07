<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand"><?= "Usuario: ".$_SESSION['usuario'] ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="btn btn-outline-danger" aria-current="page" href="../procesos/usuarios/salir.php"><i class="fa-solid fa-arrow-up-left-from-circle"></i> Salir</a>
        </li>
      </ul>
    </div>
  </div>
</nav>