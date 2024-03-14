<?php 
session_start();
include ("php/libreria/libreria.php");
include ("php/libreria/basesDatos.php");
primeraConexion();
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
    $conPDO = conexion();
    $consulta = "select pass from _usuarios where nombreUsuario=:nomeTecleado";
    $stmt = $conPDO->prepare($consulta);
    try {
        $stmt->execute(array('nomeTecleado' => $_POST['nombre']));
    } catch (PDOException $ex) {
        $conPDO = null;
        die("Erro recuperando os datos da BD: " . $ex->getMessage());
    }
    $fila=$stmt->fetch();
    if($stmt->rowCount() == 1 ) //HAI UN USUARIO
        $contrasinalBD=$fila[0];
        $passTecleado=$_POST['pass'];
        //COMPROBAMOS QUE O HASH GARDADO É COMPATIBLE CO TECLEADO.
        //TEMOS QUE COMPROBAR ANTES QUE HAI ALGÚN USUARIO:
        if ($stmt->rowCount() == 0 || !password_verify($passTecleado,$contrasinalBD)) {
            $stmt = null;
            $conProyecto = null;
            echo "Error de usuario";
        }else{

          
    
            $_SESSION["usuario"] = $_POST['nombre'];
            $consulta = $conPDO->prepare( "select * from _usuarios where nombreUsuario = :nombre");
            $consulta->bindParam(':nombre', $_POST['nombre']);

            try {
                $consulta->execute();
                $datos=$consulta->fetch();
                $_SESSION["rol"] = $datos['rol'];
                $_SESSION["id_usuario"]= $datos['id_usuario'];
                $_SESSION["nombre"] = $datos['nombreOperario'];
                $_SESSION["apellido"] = $datos['apellido'];
                $_SESSION["seccion"] = $datos['seccion'];
                $_SESSION["email"]= $datos['email'];
            } catch (PDOException $ex) {
                $conPDO = null;
                die("Erro recuperando os datos da BD: " . $ex->getMessage());
            }

            header('location: index.php');
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
    <title>Log in</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<form method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>>
    <div class="container d-flex justify-content-center aling-items-center">
      
        <div class="row principal ">
            <div class="mb-3 col-12 ">
                <label for="formGroupExampleInput" class="form-label mb-3 mt-5 ms-2"><strong>Nombre</strong></label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="nombre"
                    placeholder="Nombre de usuario">
            </div>
            <div class="mb-5 col-12">
                <label for="formGroupExampleInput2" class="form-label mb-3 ms-2"><strong>Password</strong></label>
                <input type="password" class="form-control" id="formGroupExampleInput2" name="pass"
                    placeholder="Password">
            </div>
            <div class="d-flex justify-content-center mb-5">
                <input type="submit" value="Enviar " class="btn btn-primary col-3"/>
               
             
            </div>
        </div>
       

    </div>

    </form>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>