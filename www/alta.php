<?php
session_start();
include("php/libreria/libreria.php");
include("php/libreria/basesDatos.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conPDO = conexion();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['usuario']) &&  isset($_POST['pass']) &&  isset($_POST['nombre']) &&  isset($_POST['apellido'])
         &&  isset($_POST['telefono']) &&  isset($_POST['email'])&&  isset($_POST['seccion']) &&  isset($_POST['rol'])) {
            $usuario = $_POST["usuario"];
            $pass = $_POST['pass'];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $telefono = $_POST["telefono"];
            $email = $_POST["email"];
            $zona = $_POST["seccion"];
            $rol = $_POST["rol"];

            introducirDatosUsuario($usuario,$pass,$nombre,$apellido,$telefono,$email,$zona,$rol);        
        }
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
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <form method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>>
        <div class="container d-flex justify-content-center aling-items-center">

            <div class="row principal mb-5 ">
                <div class="mb-3 col-12 ">
                    <label for="formGroupExampleInput" class="form-label mb-3 mt-5 ms-2"><strong>Usuario</strong></label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="usuario" placeholder="Nombre de usuario">
                </div>
                <div class="mb-3 col-12">
                    <label for="formGroupExampleInput2" class="form-label mb-3 ms-2"><strong>Password</strong></label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="pass" placeholder="Password">
                </div>
                <div class="mb-3 col-12">
                    <label for="formGroupExampleInput2" class="form-label mb-3 ms-2"><strong>Nombre</strong></label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="nombre" placeholder="Password">
                </div>
                <div class="mb-3 col-12">
                    <label for="formGroupExampleInput2" class="form-label mb-3 ms-2"><strong>Apelliods</strong></label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="apellido" placeholder="Password">
                </div>
                <div class="mb-3 col-12">
                    <label for="formGroupExampleInput2" class="form-label mb-3 ms-2"><strong>Telefono</strong></label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="telefono" placeholder="Password">
                </div>

                <div class="mb-3 col-12">
                    <label for="formGroupExampleInput2" class="form-label mb-3 ms-2"><strong>E-mail</strong></label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="email" placeholder="Password">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label mb-3 ms-2"><strong>Rol</strong></label>
                    <select class="form-select" aria-label="Default select example" name="rol">
                        <option selected>Selecciona la prioridad del mensaje</option>
                        <option value="tecnico">tecnico</option>
                        <option value="cliente">cliente</option>
                        <option value="administrador">Administrador</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label mb-3 ms-2"><strong>Seccion</strong></label>
                    <select class="form-select" aria-label="Default select example" name="seccion">
                        <option selected>Selecciona la prioridad del mensaje</option>
                        <option value="Lacados">Lacados</option>
                        <option value="Anodizados">Anodizados</option>
                        <option value="Extrusion">Extrusion</option>
                    </select>
                </div>
                <div class="d-flex justify-content-center mb-5">
                    <input type="submit" value="Enviar " class="btn btn-primary col-3" />
                </div>

            </div>


        </div>

    </form>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>