<?php
    session_start();
    if(isset($_SESSION['usuario'])){
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
      require_once "../app/config.php";
      require_once "../app/dependencias.php";
    ?>
    <title><?= NOMBRE_TITULO ?></title>
  </head>
  <body>
      <!-- <h2 class="text-light"><?=  $_SESSION['usuario'] ?></h2> -->
      <?php
        require_once "./main/nav.php";
      ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
<?php
if (isset($_SESSION['login'])==1) {
  echo "
      <script>
          // alert('Insertado con exito');
          swal({
              title:'Credenciales Correctas',
              text:'Disfrute su estancia',
              icon:'success',
              button:'Aceptar',
          });
          // swal('insertado con exito');
      </script>
  ";
  unset($_SESSION['login']);
}
if (isset($_SESSION['insertadoTarea'])==1) {
echo "
      <script>
          // alert('Insertado con exito');
          swal({
              title:'Insertado con exito',
              text:':D',
              icon:'success',
              button:'Aceptar',
          });
          // swal('insertado con exito');
      </script>
  ";
  unset($_SESSION['insertadoTarea']);
}
if (isset($_SESSION['eliminarTarea'])==1) {
echo "
      <script>
          // alert('Elimonado con exito');
          swal({
              title:'Eliminado con exito',
              text:':D',
              icon:'success',
              button:'Aceptar',
          });
          // swal('insertado con exito');
      </script>
  ";
  unset($_SESSION['eliminarTarea']);
}
    }else{
        header("location:../index.php");
    }
?>
