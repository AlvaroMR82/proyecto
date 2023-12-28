<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){ 

    $servername ="db";
    $username = "root";
    $password = "test";  

    try{
        //1. Conexión a base de datos
        $conPDO = new PDO("mysql:host=$servername;dbname=mantenimiento", $username, $password);
        //2. Forzar excepciones
        $conPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        die("Erro na conexión mensaxe: " . $ex->getMessage());
    }
    $nombre = $_POST["nombre"];
    // COMPROBAMOS SE EXISTE O USUARIO, E RECOLLEMOS O PASSWORD GARDADO NA BD
    //Para instertar la contraseña usaríamos esta función
    $hasheado = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    $stmt= $conPDO->prepare("INSERT INTO usuarios(usuario, pass) VALUES (:nombre,:pass)");
    $stmt->bindParam(':nombre',$nombre);
    $stmt->bindParam(':pass',$hasheado);
    $stmt->execute();
    
    
   
   // $consulta = "select pass from usuarios where usuario=:nomeTecleado";
   // $stmt = $conPDO->prepare($consulta);
   /*
    try {
        $stmt->execute();
    } catch (PDOException $ex) {
        $conPDO = null;
        die("Erro recuperando os datos da BD: " . $ex->getMessage());
    }
   */
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
                <input type="text" class="form-control" id="formGroupExampleInput2" name="pass"
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