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
  <?php

menuNav();
  ?>

        <article class="col-7 bg-light ms-2 me-3 ">
            <div class="row">
                <div class="col-12 m-3">
                    <h5>Pagina Operario</h5>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-12 mt-2 ms-4">
                    <div class="row d-flex justify-content-evenly">
                        <div class="card mb-3 col-12 me-2" style="max-width: 850px;">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="card-body">

                                        <div class="d-flex justify-content-evenly">

                                            <div class="card">
                                                <div class="card-body d-flex justify-content-around">
                                                    <div>
                                                        Ramon Garcia <br>
                                                        <strong>Seccion:</strong> Lacados
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                        fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                                                    </svg>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-evenly">
                        <div class="card mb-3 col-12 me-2" style="max-width: 850px;">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h5 class="card-title">Maquinas en supervision</h5>
                                        <div class="d-flex justify-content-around ">
                                            <div class="row">
                                                <h5 class="card-title ms-3">Lacados</h5>
                                                <div class="col">
                                                    <div class="card m-2 ">
                                                        <div class="card-body d-flex justify-content-around">
                                                            <div>
                                                                Lacado Vertical <br>
                                                            </div>
                                                            <img src="imagenes/vertical.jpg" alt="" class="img-fluid"
                                                                style="width: 30%; height: 60%;">
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
                                                            <img src="imagenes/vertical.jpg" alt="" class="img-fluid"
                                                                style="width: 30%; height: 60%;">
                                                        </div>
                                                    </div>
                                                    <div class="card m-2">
                                                        <div class="card-body d-flex justify-content-around ">
                                                            <div>
                                                                Pulidora <br>
                                                            </div>
                                                            <img src="imagenes/vertical.jpg" alt="" class="img-fluid"
                                                                style="width: 30%; height: 60%;">
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="row">
                                                <h5 class="card-title ms-3">Extrusión</h5>
                                                <div class="col">

                                                    <div class="card m-2">
                                                        <div class="card-body d-flex justify-content-around">
                                                            <div>
                                                                Prensa 16 <br>
                                                            </div>
                                                            <img src="imagenes/vertical.jpg" alt="" class="img-fluid"
                                                                style="width: 30%; height: 60%;">
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
                    <div class="row d-flex justify-content-evenly">
                        <div class="card mb-3 col-5 me-2" style="max-width: 850px;">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h5 class="card-title">Numero de incidecias resueltas</h5>
                                        <div class="card mb-2">
                                            <div class="card-header">
                                              Anodizado 1
                                            </div>
                                            <div class="card-body">
                                              <blockquote class="blockquote mb-0">
                                                <p>Paro del rectificador 1</p>
                                              </blockquote>
                                            </div>
                                          </div>
                                          <div class="card mb-2">
                                            <div class="card-header">
                                              Lacados vertical
                                            </div>
                                            <div class="card-body">
                                              <blockquote class="blockquote mb-0">
                                                <p>Bajada de presion de aire.</p>
                                              </blockquote>
                                            </div>
                                          </div>
                                          <div class="card mb-2">
                                            <div class="card-header">
                                              Pulidora
                                            </div>
                                            <div class="card-body">
                                              <blockquote class="blockquote mb-0">
                                                <p>Mangera suelta en pistola de pasta</p>
                                              </blockquote>
                                            </div>
                                          </div>
                                          <div class="card mb-2">
                                            <div class="card-header">
                                              Prensa 3
                                            </div>
                                            <div class="card-body">
                                              <blockquote class="blockquote mb-0">
                                                <p>Chatarrera atascada</p>
                                              </blockquote>
                                            </div>
                                          </div>
                                          <div class="card mb-2">
                                            <div class="card-header">
                                              Pulidora
                                            </div>
                                            <div class="card-body">
                                              <blockquote class="blockquote mb-0">
                                                <p>Mesa de la pulidora no baja</p>
                                              </blockquote>
                                            </div>
                                          </div>
                                          <div class="card mb-2">
                                            <div class="card-header">
                                              Lacado Vertical
                                            </div>
                                            <div class="card-body">
                                              <blockquote class="blockquote mb-0">
                                                <p>Fallo quemador horno de polimerizado.</p>
                                              </blockquote>
                                            </div>
                                          </div>
                                        
                                        
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 col-5 me-2" style="max-width: 850px;">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h5 class="card-title">Incidecias en activo</h5>
                                        <div class="card mb-2">
                                            <div class="card-header">
                                              Pulidora
                                            </div>
                                            <div class="card-body">
                                              <blockquote class="blockquote mb-0">
                                                <p>Rodillo central tiene unas vibraciones inusuales.</p>
                                                <a href="parte.php" class="btn btn-primary">Abrir incidencia</a>
                                              </blockquote>
                                            </div>
                                          </div>
                                          <div class="card mb-2">
                                            <div class="card-header">
                                              Pulidora
                                            </div>
                                            <div class="card-body">
                                              <blockquote class="blockquote mb-0">
                                                <p>Rodillo central tiene unas vibraciones inusuales.</p>
                                                <a href="parte.php" class="btn btn-primary">Abrir incidencia</a>
                                              </blockquote>
                                            </div>
                                          </div>
                                          <div class="card mb-2">
                                            <div class="card-header">
                                              Pulidora
                                            </div>
                                            <div class="card-body">
                                              <blockquote class="blockquote mb-0">
                                                <p>Rodillo central tiene unas vibraciones inusuales.</p>
                                                <a href="parte.php" class="btn btn-primary">Abrir incidencia</a>
                                              </blockquote>
                                            </div>
                                          </div>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



        </article>
        <div class="col-3 bg-light ms-2 ">
            <h5 class="m-3">Mensajes Generales</h5>
            <div class="container ">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Alvaro</div>
                    <div class="card-body">
                        <h5 class="card-title">Horno secado L3</h5>
                        <p class="card-text">El quemador del lado del almacen se bloqueo en el primer arranque.</p>
                    </div>
                </div>
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Juan</div>
                    <div class="card-body">
                        <h5 class="card-title">Gratadora L2 </h5>
                        <p class="card-text">Guardamotor del motor de lodos salta sin motivo aparente.</p>
                    </div>
                </div>
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Seguridad</div>
                    <div class="card-body">
                        <h5 class="card-title">Naves de lacados</h5>
                        <p class="card-text">Precaución al transitar las naves de lacados debido a las obras, maquinaria
                            pesada en continuo movimiento.</p>
                    </div>
                </div>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
</body>

</html>