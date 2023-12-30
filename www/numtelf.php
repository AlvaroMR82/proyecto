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
                    <h5>Numeros de telefono</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-11 mt-2 ms-4">
                    
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Numero</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Ramon</td>
                            <td>Garcia</td>
                            <td>123456789</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Juan</td>
                            <td>Magan</td>
                            <td>123456789</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td >Pepe </td>
                            <td >Prado</td>
                            <td>123456789</td>
                          </tr>
                        </tbody>
                      </table>
                    
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