<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('location: Login.php');
}
include("php/libreria/libreria.php");
//TODO: preparar este parte como abrir incidencia por parte del tecnico. 
$conPDO = conexion();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['mensaje']) && isset($_POST['enviar']) && $_POST['mensaje']!= "") {
        $mensaje = $_POST['mensaje'];
        $id_usuario= $_SESSION['id_usuario'];
        $id_averia = $_SESSION['id_averia'];
        

        $stmt = $conPDO->prepare("update  parteAveria SET solucion =CONCAT(solucion,', ',:mensaje) WHERE ID_parte=:id_averia");
        $stmt->bindParam(':mensaje', $mensaje);
        $stmt->bindParam(':id_averia', $id_averia );
        $stmt->execute();

        
    } 
    
    if(isset($_POST['cogerParte'])){
        $id_usuario= $_SESSION['id_usuario'];
        $id_averia = $_SESSION['id_averia'];
        $stmt = $conPDO->prepare("UPDATE  parteAveria SET operarios_ID = :id_usuario, estado = 'asignado' WHERE ID_parte = :id_averia");
        $stmt->bindParam(':id_usuario', $id_usuario);
        $stmt->bindParam(':id_averia', $id_averia );
        $stmt->execute();
    }
    if(isset($_POST['cerrarParte'])){
        $id_averia = $_SESSION['id_averia'];
        $stmt = $conPDO->prepare("update  parteAveria SET estado='cerrado' WHERE ID_parte=:id_averia");
        $stmt->bindParam(':id_averia', $id_averia );
        $stmt->execute();
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
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Panel de control</title>
</head>

<body>
    <?php

    menuNav();
    ?>

    <article class="col-7 bg-light ms-2 me-3">
    <form method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>>
        <div class="row">
            <div class="col-12 m-3">
                <h5>Asignación de averia</h5>
            </div>
        </div>
        <div class="row">
        
            <div class="col-12 mt-2 ms-4">
                <div class="row">
                    <div class="card mb-3 col-12 me-2" style="max-width: 1050px;">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title">Descripción de la averia</h5>
                                        <p><?php
                                        if(isset($_GET['id_averia'])){
                                        $_SESSION['id_averia']= $_GET['id_averia'];
                                        }

                                            descipcionAveria($_SESSION['id_averia']);
                                        ?></p>

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Actuación</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="mensaje" rows="3"></textarea>
                                    </div>
                                    <div class="d-flex justify-content-center mb-5">
                                        <input type="submit" value="Coger Parte " name="cogerParte" class="btn btn-success col-3 me-2" />
                                        <input type="submit" value="Enviar" name="enviar" class="btn btn-primary col-3 me-2" />
                                        <input type="submit" value="Cerrar Parte" name="cerrarParte" class="btn btn-warning col-3" />
                                    </div>
                                    <div class="d-flex justify-content-center mb-5">
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


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