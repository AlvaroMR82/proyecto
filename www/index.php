<?php
session_start();
if(!isset($_SESSION['usuario'])){
  header('location: Login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Panel de control</title>
</head>

<body>
<?php
include ("php/libreria/libreria.php");

  ?>


  <div class="container-fluid d-flex mt-5">
  <?php

menuNav();
  ?>

    <article class="col-7 bg-light ms-2 me-3">
      <div class="row">
        <div class="col-12 m-3">
          <h5>Pagina Principal</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mt-2 ms-4">
          <div class="row">
            <div class="card mb-3 col-12 me-2" style="max-width: 850px;">
              <div class="row g-0">
                <div class="col-md-12">
                  <div class="card-body">
                    <h5 class="card-title">Operarios en activo</h5>
                    <div class="d-flex justify-content-around">
                    <?php operario1();
                          operario2();
                          operario3();?>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="card mb-3 col-12 me-2" style="max-width: 850px;">
              <div class="row g-0">
                <div class="col-md-12">
                  <div class="card-body">
                    <h5 class="card-title">Maquinas en activo</h5>
                    <div class="d-flex justify-content-around ">
                      <div class="row">
                        <h5 class="card-title ms-3">Lacados</h5>
                        <div class="col">
                          <div class="card m-2 ">
                            <div class="card-body d-flex justify-content-around">
                              <div>
                               Lacado Vertical <br>
                            </div>
                              <img src="imagenes/vertical.jpg" alt="" class="img-fluid" style="width: 30%; height: 60%;">
                            </div>
                          </div>
                          <div class="card m-2" >
                            <div class="card-body d-flex justify-content-around ">
                              <div>
                                Lacado Horizontal <br>
                            </div>
                            <img src="imagenes/vertical.jpg" alt="" class="img-fluid" style="width: 30%; height: 60%;">
                            </div>
                          </div>
                          <div class="card m-2" >
                            <div class="card-body d-flex justify-content-around">
                              <div>
                               Imitacion Madera <br>
                            </div>
                            <img src="imagenes/vertical.jpg" alt="" class="img-fluid" style="width: 30%; height: 60%;">
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="row">
                        <h5 class="card-title ms-3">Anodizados</h5>
                        <div class="col">
                          <div class="card m-2 ">
                            <div class="card-body d-flex justify-content-around">
                              <div>
                              Anodizado 1 <br>
                            </div>
                              <img src="imagenes/vertical.jpg" alt="" class="img-fluid" style="width: 30%; height: 60%;">
                            </div>
                          </div>
                          <div class="card m-2" >
                            <div class="card-body d-flex justify-content-around ">
                              <div>
                               Pulidora <br>
                            </div>
                            <img src="imagenes/vertical.jpg" alt="" class="img-fluid" style="width: 30%; height: 60%;">
                            </div>
                          </div>
                          <div class="card m-2" >
                            <div class="card-body d-flex justify-content-around">
                              <div>
                                Granalladora <br>
                            </div>
                            <img src="imagenes/vertical.jpg" alt="" class="img-fluid" style="width: 30%; height: 60%;">
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="row">
                        <h5 class="card-title ms-3">Extrusión</h5>
                        <div class="col">
                          <div class="card m-2 ">
                            <div class="card-body d-flex justify-content-around">
                              <div>
                               Prensa 3 <br>
                            </div>
                              <img src="imagenes/vertical.jpg" alt="" class="img-fluid" style="width: 30%; height: 60%;">
                            </div>
                          </div>
                          <div class="card m-2" >
                            <div class="card-body d-flex justify-content-around ">
                              <div>
                                Fundicion <br>
                            </div>
                            <img src="imagenes/vertical.jpg" alt="" class="img-fluid" style="width: 30%; height: 60%;">
                            </div>
                          </div>
                          <div class="card m-2" >
                            <div class="card-body d-flex justify-content-around">
                              <div>
                                Prensa 16 <br>
                            </div>
                            <img src="imagenes/vertical.jpg" alt="" class="img-fluid" style="width: 30%; height: 60%;">
                            </div>
                          </div>

                        </div>
                      </div>
                   
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="card mb-3 col-12 me-2" style="max-width: 850px;">
              <div class="row g-0">
                <div class="col-md-12">
                  <div class="card-body">
                    <h5 class="card-title">Numero de incidecias en activo</h5>
                    <p>Incidencias resueltas sobre el total</p>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                    <p class="mt-3">Incidencias Pendientes por repuestos</p>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">20%</div>
                    </div>
                    <p class="mt-3">Incidencias pendientes de paro del proceso.</p>
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">10%</div>
                    </div>
                    <p class="card-text mt-3"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
    
    
    
    </article>
    <div class="col-3 bg-light ms-2 ">
    <?php

mensajesGenerales();
  ?>
    
    </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>

</html>