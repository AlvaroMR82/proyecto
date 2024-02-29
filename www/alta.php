<?php
session_start();
include("php/libreria/libreria.php");
include("php/libreria/basesDatos.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conPDO = conexion();


  if (
    isset($_POST['usuario']) &&  isset($_POST['pass']) &&  isset($_POST['nombre']) &&  isset($_POST['apellido'])
    &&  isset($_POST['telefono']) &&  isset($_POST['email']) &&  isset($_POST['seccion']) &&  isset($_POST['rol'])
  ) {
    $usuario = $_POST["usuario"];
    $pass = $_POST['pass'];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $zona = $_POST["seccion"];
    $rol = $_POST["rol"];




    introducirDatosUsuario($usuario, $pass, $nombre, $apellido, $telefono, $email, $zona, $rol);
  }



  $stmt = null;
  $conPDO = null;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alta de usuarios</title>
  <link rel="stylesheet" href="css/estilos.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <?php

  menuNav();
  ?>
  <article class="col-7 bg-light ms-2 me-3">
    <form method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>>
      <div class="container">
        <p> Formulario de alta de usuario</p>
        <div class="row  mb-5 mt-5 ">
          <form class="row g-3">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Nombre de usuario</label>
              <input type="text" class="form-control" name="usuario" id="inputEmail4" required>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword4" name="pass" required>
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="inputEmail4" name="nombre" required>
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Apellidos</label>
              <input type="text" class="form-control" name="apellido" id="inputEmail4" required>
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Numero de teléfono</label>
              <input type="text" class="form-control" id="inputEmail4" name="telefono" required>
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="ejemplo@correo.com" required>
            </div>
            <div class="col-md-6">
              <label for="formGroupExampleInput" class="form-label">Sección</label>
              <select class="form-select" aria-label="Default select example" name="seccion" required>
                <option value="lacados">Lacados</option>
                <option value="anodizados">Anodizados</option>
                <option value="extrusion">Extrusión</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="formGroupExampleInput" class="form-label">Rol</label>
              <select class="form-select" aria-label="Default select example" name="rol" required>
                <option value="cliente">Cliente</option>
                <option value="tecnico">Técnico</option>
                <option value="administrador">Administrador</option>
              </select>
            </div>


            <div class="mb-5 mt-5">
              <input type="submit" value="Enviar " class="btn btn-primary col-2" />
            </div>
          </form>





        </div>

    </form>

  </article>
  <div class="col-3 bg-light ms-2 ">
    <?php

    mensajesGenerales();
    ?>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>