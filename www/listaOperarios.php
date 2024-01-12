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
                                        <div class="mt-5">
                                            <div class="row d-flex justify-content-around mt-2">
                                            <?php operarios();?>                                             
                                               
                                            </div>

                                            <div class="row d-flex justify-content-around mt-2">

                                                <div class="card col-3">
                                                    <div class="card-body d-flex justify-content-around">
                                                        <div>
                                                           Martin Lopez <br>
                                                            <strong>Seccion:</strong> Anodizados
                                                        </div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                            fill="currentColor" class="bi bi-person"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card col-3">
                                                    <div class="card-body d-flex justify-content-around">
                                                        <div>
                                                            Eduardo Rodriguez <br>
                                                            <strong>Seccion:</strong> Lacados
                                                        </div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                            fill="currentColor" class="bi bi-person"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="card col-3">
                                                    <div class="card-body d-flex justify-content-around">
                                                        <div>
                                                            Pepe Prado <br>
                                                            <strong>Seccion:</strong> Extrusión
                                                        </div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                            fill="currentColor" class="bi bi-person"
                                                            viewBox="0 0 16 16">
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
