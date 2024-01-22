<?php

function menuNav()
{

  echo "<div class='container-fluid d-flex mt-5'>
    <nav class='col-2 bg-primary text-white ms-2 me-3'>
      <div class='ms-2 me-2 mt-2'>
        <a href='#'>Panel de administración</a>

        <hr class='sidebar-divider my-0'>

        <li class='nav-item active'>
          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-house'
            viewBox='0 0 16 16'>
            <path
              d='M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z' />
          </svg>
          <a href='index.php'> Panel principal</a>
        </li>
        <ul>

          <li class='nav-item active'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-gear'
              viewBox='0 0 16 16'>
              <path
                d='M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z' />
              <path
                d='M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z' />
            </svg>
            <a href='maquinas.php'> Lista de máquinas</a>
          </li>
          <li class='nav-item active'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
              class='bi bi-person-fill-gear' viewBox='0 0 16 16'>
              <path
                d='M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z' />
            </svg>
            <a href='listaOperarios.php'> Lista de operarios</a>
          </li>
          <li class='nav-item active'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
              class='bi bi-person-circle' viewBox='0 0 16 16'>
              <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z' />
              <path fill-rule='evenodd'
                d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z' />
            </svg>
            <a href=''> Lista de clientes</a>
          </li>
        </ul>
        <li class='nav-item active'>
          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-house'
            viewBox='0 0 16 16'>
            <path
              d='M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z' />
          </svg>
          <a href=''> Administración</a>
        </li>
        <ul>

          <li class='nav-item active'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-gear'
              viewBox='0 0 16 16'>
              <path
                d='M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z' />
              <path
                d='M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z' />
            </svg>
            <a href=''> Estadísticas</a>
          </li>
          <li class='nav-item active'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
              class='bi bi-person-fill-gear' viewBox='0 0 16 16'>
              <path
                d='M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z' />
            </svg>
            <a href=''> Actualización de máquinas</a>
          </li>
          <li class='nav-item active'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
              class='bi bi-person-circle' viewBox='0 0 16 16'>
              <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z' />
              <path fill-rule='evenodd'
                d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z' />
            </svg>
            <a href=''> Actualización de clientes</a>
          </li>
        </ul>
        <li class='nav-item active'>
          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-house'
            viewBox='0 0 16 16'>
            <path
              d='M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z' />
          </svg>
          <a href=''> Comunicaciones</a>
        </li>
        <ul>

          <li class='nav-item active'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-chat-fill'
              viewBox='0 0 16 16'>
              <path
                d='M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15' />
            </svg>
            <a href='mensajes.php'> Mensajes Generales</a>
          </li>
          <li class='nav-item active'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
              class='bi bi-envelope-at-fill' viewBox='0 0 16 16'>
              <path
                d='M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671' />
              <path
                d='M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z' />
            </svg>
            <a href='correo.php'> E-mail</a>
          </li>
          <li class='nav-item active'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-phone'
              viewBox='0 0 16 16'>
              <path
                d='M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z' />
              <path d='M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2' />
            </svg>
            <a href='numtelf.php'> Numeros de telefono</a>
          </li>
        </ul>

      </div>
    </nav>";
}

function mensajesGenerales()
{
  $conPDO = conexion();
  $stmt = $conPDO->prepare("SELECT * FROM mensajes ORDER BY ID DESC LIMIT 10;");
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  
  echo "     
    <h5 class='m-3'>Mensajes Generales</h5>
    <div class='container '>"; 
  
  while ($row = $stmt->fetch()) {
    echo "

    <div class='card text-dark bg-".$row['prioridad']." mb-3' style='max-width: 18rem;'>
    <div class='card-header'>".$row['nombre']."</div>
    <div class='card-body bg-white'>
      <h5 class='card-title'>".$row['zona']."</h5>
      <p class='card-text'>".$row['mensaje']."</p>
    </div>    
    </div>";
  }
  echo "</div>"; 

  /*
  echo "     
    <h5 class='m-3'>Mensajes Generales</h5>
    <div class='container '>
      <div class='card text-dark bg-light mb-3' style='max-width: 18rem;'>
        <div class='card-header'>Alvaro</div>
        <div class='card-body'>
          <h5 class='card-title'>Horno secado L3</h5>
          <p class='card-text'>El quemador del lado del almacen se bloqueo en el primer arranque.</p>
        </div>
      </div>
      <div class='card text-dark bg-light mb-3' style='max-width: 18rem;'>
        <div class='card-header'>Juan</div>
        <div class='card-body'>
          <h5 class='card-title'>Gratadora L2 </h5>
          <p class='card-text'>Guardamotor del motor de lodos salta sin motivo aparente.</p>
        </div>
      </div>
      <div class='card text-dark bg-light mb-3' style='max-width: 18rem;'>
        <div class='card-header'>Seguridad</div>
        <div class='card-body'>
          <h5 class='card-title'>Naves de lacados</h5>
          <p class='card-text'>Precaución al transitar las naves de lacados debido a las obras, maquinaria pesada en continuo movimiento.</p>
        </div>
      </div>
    </div>";

    */
}

function operario1()
{

  echo " 
  <div class='card'>
  <div class='card-body d-flex justify-content-around'>
    <div>
      Ramon Garcia <br>
      <strong>Seccion:</strong> Lacados
  </div>
    <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
      <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z'/>
    </svg>
  </div>
</div>";
}
function operario2()
{

  echo " 
  <div class='card'>
  <div class='card-body d-flex justify-content-around'>
    <div>
      Juan Magan <br>
      <strong>Seccion:</strong> Extrusión
  </div>
    <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
      <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z'/>
    </svg>
  </div>
</div>";
}
function operario3()
{

  echo " 
  <div class='card'>
  <div class='card-body d-flex justify-content-around'>
    <div>
      Pepe Prado <br>
      <strong>Seccion:</strong> Lacados
  </div>
    <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
      <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z'/>
    </svg>
  </div>
</div>";
}

function conexion()
{
  $servername = "db";
  $username = "root";
  $password = "test";
  try {
    //1. Conexión a base de datos
    $conPDO = new PDO("mysql:host=$servername;dbname=mantenimiento", $username, $password);
    //2. Forzar excepciones
    $conPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $ex) {
    die("Erro na conexión mensaxe: " . $ex->getMessage());
  }

  return $conPDO;
}

function operarios()
{

  $conPDO = conexion();
  $stmt = $conPDO->prepare("SELECT * FROM operarios WHERE id > 1");
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);

  while ($row = $stmt->fetch()) {
    echo " 
  <a href='operario.php?id=".$row['id']."' class='text-dark' >
  <div class='card'>
  <div class='card-body d-flex justify-content-around'>
    <div>
      " . $row['nombre'] . " " . $row['apellido'] . " <br>
      <strong>Sección:</strong> " . $row['seccion'] . "
  </div>
    <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
      <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z'/>
    </svg>
  </div>
</div></a>";
  }
}
function operario()
{

  $conPDO = conexion();
  $id =$_GET["id"];
  $stmt = $conPDO->prepare("SELECT * FROM operarios WHERE id =:id");
  $stmt->bindParam(':id',$id); 
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  
  while ($row = $stmt->fetch()) {
    echo " 
  <a href='operario.php?id=".$row['id']."' class='text-dark' >
  <div class='card'>
  <div class='card-body d-flex justify-content-around'>
    <div>
      " . $row['nombre'] . " " . $row['apellido'] . " <br>
      <strong>Sección:</strong> " . $row['seccion'] . "
  </div>
    <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
      <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z'/>
    </svg>
  </div>
</div></a>";
  }
}
function telOperarios()
{
  $conPDO = conexion();
  $stmt = $conPDO->prepare("SELECT * FROM operarios");
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);

  while ($row = $stmt->fetch()) {
    echo "
  <tr>
  <th scope='row'>" . $row['id'] . "</th>
  <td>".$row['nombre'] ."</td>
  <td>" . $row['apellido'] . "</td>
  <td>" . $row['telefono'] . "</td>
</tr>";
  }
}

function maquinas()
{

  $conPDO = conexion();
  $stmt = $conPDO->prepare("SELECT * FROM maquinas ");
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);

  while ($row = $stmt->fetch()) {

    echo " 
<div class='col-6'>
  <a href='maquina.php' class='text-dark' >
  <div class='card'>
  <div class='card-body d-flex justify-content-around'>
    <div>
      " . $row['nombreMaquina'] . " <br>
      <strong>Sección:</strong> " . $row['Zona'] . "
  </div>
  <img src=". $row['foto'] ." alt='' style ='width: 30%; height: 60%;'>
  </div>
</div></a>
</div>";

  }
 
}
function maquinasEmpleado()
{
  $id =$_GET["id"];
  $conPDO = conexion();
  $sql = $conPDO->prepare('SELECT seccion from operarios where id =:id ');
  $sql->bindParam(':id', $id);
  $sql->execute();
  $sql->setFetchMode(PDO::FETCH_ASSOC);
  while($row = $sql->fetch()){
    $seccion = $row['seccion'];
  }
  $stmt = $conPDO->prepare("SELECT * FROM maquinas where Zona='".$seccion."'");
  //$stmt->bindParam(':zona','lacados');
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);

  while ($row = $stmt->fetch()) {
    echo " 
<div class='col-6'>
  <a href='maquina.php' class='text-dark' >
  <div class='card'>
  <div class='card-body d-flex justify-content-around'>
    <div>
      " . $row['nombreMaquina'] . " <br>
      <strong>Sección:</strong> " . $row['Zona'] . "
  </div>
  <img src=". $row['foto'] ." alt='' style ='width: 30%; height: 60%;'>
  </div>
</div></a>
</div>";
  }
  
}
