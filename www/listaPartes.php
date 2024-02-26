<?php
session_start();
include("php/libreria/libreria.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Partes de incidencias</title>
</head>

<body>
    <?php
    menuNav();
    ?>


    <article class="col-7 bg-light ms-2 me-3">
        <div class="row">
            <div class="col-12 m-3">
                <h5>Lista de Partes de incidencias</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-2 ms-4">
                <div class="row">
                    <div class="card mb-3 col-12 me-2" style="max-width: 1050px;">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title">Incidencias pedientes de asignación</h5>
                                    <div class="mt-5">
                                        <div class="row d-flex justify-content-around mt-2">
                                            <table class="table">
                                                <thead>
                                                    <tr>

                                                        <th scope="col">Fecha</th>
                                                        <th scope="col">Seccion</th>
                                                        <th scope="col">Maquina</th>
                                                        <th scope="col">Estado</th>
                                                        <th scope="col">Cliente</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php listaAveriasPendientes($_SESSION['seccion']); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card mb-3 col-12 me-2" style="max-width: 1050px;">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title">Incidencias pedientes ya asignadas</h5>
                                    <div class="mt-5">
                                        <div class="row d-flex justify-content-around mt-2">
                                            <table class="table">
                                                <thead>
                                                    <tr>

                                                        <th scope="col">Fecha</th>
                                                        <th scope="col">Seccion</th>
                                                        <th scope="col">Maquina</th>
                                                        <th scope="col">Estado</th>
                                                        <th scope="col">Cliente</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php listaAveriasAsignadas($_SESSION['seccion']); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card mb-3 col-12 me-2" style="max-width: 1050px;">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title">Incidencias resueltas</h5>
                                    <div class="mt-5">
                                        <div class="row d-flex justify-content-around mt-2">
                                            <table class="table">
                                                <thead>
                                                    <tr>

                                                        <th scope="col">Fecha</th>
                                                        <th scope="col">Seccion</th>
                                                        <th scope="col">Maquina</th>
                                                        <th scope="col">Estado</th>
                                                        <th scope="col">Cliente</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php listaAveriasCerradas($_SESSION['seccion']); ?>
                                                </tbody>
                                            </table>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
//TODO: crear visualizador de partes para ver como van o se resolvieron las incidencias. 