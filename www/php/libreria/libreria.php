<?php
/**
 * Esta función escribe el menu lateral de navegación  y discrimina por rol.
 *
 * @return void
 */
function menuNav()
{

  echo "
  <div class='container-fluid bg-light mt-3'>
      <div class='row justify-content-end'>
            <div class='col-4 pt-3'>
                <p><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
                class='bi bi-person-circle' viewBox='0 0 16 16'>
                <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z' />
                <path fill-rule='evenodd'
                  d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z' />
              </svg>&nbsp&nbsp".$_SESSION['nombre']." ".$_SESSION['apellido']." &nbsp&nbsp&nbsp <strong>". strtoupper($_SESSION['rol']) ."</strong> &nbsp&nbsp&nbsp<a href='logout.php'> Log out </a></p>
               
            </div>
      </div>

  </div>  
  <div class='container-fluid d-flex mt-2'>
    <nav class='col-2 bg-primary text-white ms-2 me-3'>
      <div class='ms-2 me-2 mt-2'>
        <p>Panel de administración</p>

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
            <a href='listaOperarios.php'> Lista de técnicos</a>
          </li>
          <li class='nav-item active'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
              class='bi bi-person-circle' viewBox='0 0 16 16'>
              <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z' />
              <path fill-rule='evenodd'
                d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z' />
            </svg>
            <a href='listaClientes.php'> Lista de clientes</a>
          </li>
          <li class='nav-item active'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
              class='bi bi-person-circle' viewBox='0 0 16 16'>
              <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z' />
              <path fill-rule='evenodd'
                d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z' />
            </svg>
            <a href='listaPartes.php'>Lista de incidencias</a>
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
            <a href='estadisticas.php'> Estadísticas</a>
          </li>";
         
          
        if($_SESSION["rol"] == 'cliente' ){
          echo "
          <li class='nav-item active'>
          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
            class='bi bi-person-circle' viewBox='0 0 16 16'>
            <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z' />
            <path fill-rule='evenodd'
              d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z' />
          </svg>
          <a href='abrirParte.php'>Abrir parte de averia</a>
        </li>";
               }elseif ( $_SESSION["rol"] == 'administrador'){
          echo "
          <li class='nav-item active'>
          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
            class='bi bi-person-fill-gear' viewBox='0 0 16 16'>
            <path
              d='M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z' />
          </svg>
          <a href='actualizarTecnico.php'> Actualización de técnicos</a>
        </li>
          <li class='nav-item active'>
          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
            class='bi bi-person-fill-gear' viewBox='0 0 16 16'>
            <path
              d='M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z' />
          </svg>
          <a href='actualizarMaquina.php'> Actualización de máquinas</a>
        </li>
        <li class='nav-item active'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
        class='bi bi-person-fill-gear' viewBox='0 0 16 16'>
        <path
          d='M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z' />
      </svg>
          <a href='actualizarCliente.php'> Actualización de clientes</a>
        <li class='nav-item active'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
            class='bi bi-person-circle' viewBox='0 0 16 16'>
            <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z' />
            <path fill-rule='evenodd'
              d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z' />
          </svg>
        <a href='abrirParte.php'>Abrir parte de averia</a>
      </li>
      <li class='nav-item active'>
          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'
            class='bi bi-person-circle' viewBox='0 0 16 16'>
            <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z' />
            <path fill-rule='evenodd'
              d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z' />
          </svg>
          <a href='alta.php'>Creación de usuarios</a>
        </li>";
        }
        echo "</ul>
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
            <a href='numtelf.php'> Números de teléfono</a>
          </li>
        </ul>

      </div>
    </nav>";
}
/**
 * Esta función busca los 5 últimos mensajes y los representa en el lateral izquierdo del la pantalla.
 *
 * @return void
 */
function mensajesGenerales()
{
  $conPDO = conexion();
  $stmt = $conPDO->prepare("SELECT * FROM mensajes ORDER BY ID DESC LIMIT 5;");
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);//Creación de usuarios
  
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

}
/**
 * Esta función devuelve la conexión a la base de datos.
 *
 * @return conexión a la base de datos
 */
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

/**
 * Esta función devuelve un los datos de un operario según la sección a la que pertenece.
 *
 * @param [string] $seccion
 * @return void
 */
function operarios($seccion)
{

  $conPDO = conexion();

if($_SESSION['rol']== 'administrador'){

  $stmt = $conPDO->prepare("SELECT * FROM _usuarios where rol= 'tecnico'");
 
}else{

  $stmt = $conPDO->prepare("SELECT * FROM _usuarios where rol= 'tecnico' AND seccion ='".$seccion."'");
}

  
  $stmt->execute();
  $numResultados = $stmt->rowCount(); 
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  
   if ( $numResultados <=2){
    $col = 12;

   }elseif( $numResultados >2){

    $col = 4;
   }

  while ($row = $stmt->fetch()) {
   
   
    echo " 
    <div class='col-".$col."'>
  <a href='operario.php?id=".$row['id_usuario']."' class='text-dark' >
  <div class='card mb-3 '>
  <div class='card-body d-flex justify-content-evenly'>
    <div>
      " . $row['nombreOperario'] . " " . $row['apellido'] . " <br>
      <strong>Sección:</strong> " . $row['seccion'] . "
  </div>
    <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
      <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z'/>
    </svg>
  </div>
</div></a>
</div>
";
  }
}
/**
 * Esta función devuelve un los datos de los usuarios que son clientes  y los escribe en pantalla.
 *
 * @return void
 */
function clientes()
{

  $conPDO = conexion();
  $stmt = $conPDO->prepare("SELECT * FROM _usuarios where rol= 'cliente' ");
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);

  while ($row = $stmt->fetch()) {
    echo " 
      <div class='col-4'>
  <a href='operario.php?id=".$row['id_usuario']."' class='text-dark' >
  <div class='card mb-3'>
  <div class='card-body d-flex justify-content-around'>
    <div>
      " . $row['nombreOperario'] . " " . $row['apellido'] . " <br>
      <strong>Sección:</strong> " . $row['seccion'] . "
  </div>
    <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
      <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z'/>
    </svg>
  </div>
</div></a>
  </div>
";
  }
}
/**
 * Esta funcion escribe en pantalla en formato card la información de un operario según su id que recoge en la propia pagina.
 *
 * @return void
 */
function operario()
{

  $conPDO = conexion();
  $id =$_GET["id"];
  $stmt = $conPDO->prepare("SELECT * FROM _usuarios WHERE id_usuario =:id");
  $stmt->bindParam(':id',$id); 
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  
  while ($row = $stmt->fetch()) {
    echo " 
  <a href='operario.php?id=".$row['id_usuario']."' class='text-dark' >
  <div class='card'>
  <div class='card-body d-flex justify-content-around'>
    <div class='me-3'>
      " . $row['nombreOperario'] . " " . $row['apellido'] . " <br>
      <strong>Sección:</strong> " . $row['seccion'] . "
  </div >
    <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
      <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z'/>
    </svg>
  </div>
</div></a>";
  }
}
/**
 * Esta función escribe en pantalla los teléfonos y  correos de todos los usuarios.
 *
 * @return void
 */
function telOperarios()
{
  $conPDO = conexion();
  $stmt = $conPDO->prepare("SELECT * FROM _usuarios");
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);

  while ($row = $stmt->fetch()) {
    echo "
  <tr>
  <th scope='row'>" . $row['id_usuario'] . "</th>
  <td>".$row['nombreUsuario'] ."</td>
  <td>" . $row['apellido'] . "</td>
  <td>" . $row['telefono'] . "</td>
</tr>";
  }
}
/**
 * Esta función escribe ne pantalla la información de una maquina según sección e indice.
 *
 * @param [string] $seccion
 * @param [int] $index
 * @return void
 */
function maquinas($seccion, $index)
{
  $conPDO = conexion();
  if($_SESSION['rol'] == "administrador" && !$index){
    $stmt = $conPDO->prepare("SELECT * FROM maquinas");

  }else{
    $stmt = $conPDO->prepare("SELECT * FROM maquinas where seccion = '".$seccion."'");
  }

  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);

  while ($row = $stmt->fetch()) {

    echo " 
<div class='col-4'>
  <a href='maquina.php?id=".$row['id_maquina']."' class='text-dark' >
  <div class='card mb-3'>
  <div class='card-body d-flex justify-content-around'>
    <div>
      " . $row['nombreMaquina'] . " <br>
      <strong>Sección:</strong> " . $row['seccion'] . "
  </div>
  <img src=". $row['foto'] ." alt='' style ='width: 100px; height: 50px;'>
  </div>
</div></a>
</div>";

  }
 
}
/**
 * Esta función escribe en pantalla en formato card la información de una maquina según su id que recoge en la propia pagina.
 *
 * @return void
 */
function maquina(){
  
  $id =$_GET["id"];
  $conPDO = conexion();
  $stmt = $conPDO->prepare("SELECT * FROM maquinas where id_maquina = :id ");
  $stmt ->bindParam(':id',$id);
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);

  while ($row = $stmt->fetch()) {

    echo " 
<div class='col-6'>
  <a href='maquina.php?id=".$row['id_maquina']."' class='text-dark' >
  <div class='card'>
  <div class='card-body d-flex justify-content-around'>
    <div>
      " . $row['nombreMaquina'] . " <br>
      <strong>Sección:</strong> " . $row['seccion'] . "
  </div>
  <img src=". $row['foto'] ." alt='' style ='width: 30%; height: 60%;'>
  </div>
</div></a>
</div>";

  }
}
/**
 * Esta función escribe en pantalla en formato card las maquinas bajo administración de un  usuario.
 *
 * @return void
 */
function maquinasEmpleado()
{
  $id =$_GET["id"];
  $conPDO = conexion();
  $sql = $conPDO->prepare('SELECT seccion from _usuarios where id_usuario =:id ');
  $sql->bindParam(':id', $id);
  $sql->execute();
  $sql->setFetchMode(PDO::FETCH_ASSOC);
  while($row = $sql->fetch()){
    $seccion = $row['seccion'];
  }
  $stmt = $conPDO->prepare("SELECT * FROM maquinas where seccion='".$seccion."'");
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);

  while ($row = $stmt->fetch()) {
    echo " 
<div class='col-6'>
  <a href='maquina.php?id=".$row['id_maquina']."' class='text-dark' >
  <div class='card mb-3'>
  <div class='card-body d-flex justify-content-around'>
    <div>
      " . $row['nombreMaquina'] . " <br>
      <strong>Sección:</strong> " . $row['seccion'] . "
  </div>
  <img src=". $row['foto'] ." alt='' style ='width: 100px; height: 80px;'>
  </div>
</div></a>
</div>";
  }
  
}
/**
 * Esta función escribe en pantalla en formato card las maquinas según su sección.
 *
 * @param [string] $seccion
 * @return void
 */
function maquinaSeccion($seccion){
  $conPDO = conexion();
  if($_SESSION['rol']== "administrador"){

    $stmt = $conPDO->prepare("SELECT * FROM maquinas");

  }else{
    $stmt = $conPDO->prepare("SELECT * FROM maquinas where seccion='".$seccion."'");
  }  
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  while ($row = $stmt->fetch()) {
    echo " 

    <option value=".$row['id_maquina'].">".$row['nombreMaquina']."</option>";
  }


}
/**
 * Esta función escribe en pantalla la descripción de un averia según el id de la misma.
 *
 * @param [int] $id_parte
 * @return void
 */
function descipcionAveria($id_parte){
  $conPDO = conexion();
  $stmt = $conPDO->prepare("SELECT * FROM parteAveria  where ID_parte='".$id_parte."'");
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  while ($row = $stmt->fetch()) {
    echo $row['incidencia'];
  }
  
}
/**
 * Esta función escribe en pantalla toda la información de una averia.
 *
 * @param [id] $id_parte
 * @return void
 */
function descipcionAveriaCompleta($id_parte){
  $conPDO = conexion();
  $stmt = $conPDO->prepare("SELECT * FROM parteAveria  where ID_parte='".$id_parte."'");
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  while ($row = $stmt->fetch()) {
    echo $row['incidencia']."<br>". 
    "<strong>Estado: </strong>".$row['estado']."<br>". 
    "<strong>Técnico asignado: </strong>". nombreCliente($row['operarios_ID'])."<br>". 
    "<strong>Solución: </strong>". $row['solucion'];

  }
  
}
/**
 * Esta función escribe en pantalla la lista de averías sin asignación de una sección;
 *
 * @param [string] $seccion
 * @return void
 */
function listaAveriasPendientes($seccion){
   
    $conPDO = conexion();
    $stmt = $conPDO->prepare("SELECT * FROM parteAveria WHERE estado='pendiente' AND zona='".$seccion."'");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

      if($_SESSION['rol'] == 'tecnico' || $_SESSION['rol'] == 'administrador'){

        while ($row = $stmt->fetch()) {
          $nombreMaquina = nombreMaquina($row['maquinas_ID']);
          $nombreCliente = nombreCliente($row['id_cliente']);
         
    
          echo "
        <tr>
        
        <th scope='row'><a href='cogerParte.php?id_averia=".$row['ID_parte']."'>" . $row['Fecha'] . "</a></th>
        <td>".$row['Zona'] ."</td>
        <td>" . $nombreMaquina . "</td>
        <td>" . $row['estado'] . "</td>
        <td>" . $nombreCliente . "</td>
        <td><a class='btn btn-primary  ms-3' href=parte.php?id=".$row['ID_parte'].">Ver</a></td>
      </tr>";
        }
      }elseif( $_SESSION['rol']== 'cliente') {

    while ($row = $stmt->fetch()) {
      $nombreMaquina = nombreMaquina($row['maquinas_ID']);
      $nombreCliente = nombreCliente($row['id_cliente']);
     

      echo "
    <tr>
    
    <th scope='row'>".$row['Fecha']."</th>
    <td>".$row['Zona'] ."</td>
    <td>" . $nombreMaquina . "</td>
    <td>" . $row['estado'] . "</td>
    <td>" . $nombreCliente . "</td>
    <td><a class='btn btn-primary  ms-3' href=parte.php?id=".$row['ID_parte'].">Ver</a></td>
  </tr>";
    }
  }
  }
  /**
   * Esta función escribe en pantalla la lista de averías asignadas de una sección;
   *
   * @param [type] $seccion
   * @return void
   */
  function listaAveriasAsignadas($seccion){
   
    $conPDO = conexion();
    $stmt = $conPDO->prepare("SELECT * FROM parteAveria WHERE estado = 'asignado' AND zona = '".$seccion."'");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);


    while ($row = $stmt->fetch()) {
      $nombreMaquina = nombreMaquina($row['maquinas_ID']);
      $nombreCliente = nombreCliente($row['id_cliente']);
      $nombreTecnico = nombreCliente($row['operarios_ID']);

      echo "
    <tr>
    
    <th scope='row'>".$row['Fecha']."</th>
    <td>".$row['Zona'] ."</td>
    <td>" . $nombreMaquina. "</td>
    <td>" . $row['estado'] . "</td>
    <td>" . $nombreTecnico . "</td>
    <td>" . $nombreCliente . "</td>
    <td><a class='btn btn-primary  ms-3' href=parte.php?id=".$row['ID_parte'].">Ver</a></td>
  </tr>";
    }
  }
  /**
   * Esta función escribe en pantalla la lista de averías cerradas de una sección;
   *
   * @param [type] $seccion
   * @return void
   */
  function listaAveriasCerradas($seccion){
    
    $conPDO = conexion();
    $stmt = $conPDO->prepare("SELECT * FROM parteAveria WHERE estado='cerrado'  AND zona='".$seccion."'");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    while ($row = $stmt->fetch()) {
      $nombreMaquina = nombreMaquina($row['maquinas_ID']);
      $nombreCliente = nombreCliente($row['id_cliente']);
      $nombreTecnico = nombreCliente($row['operarios_ID']);

      echo "
    <tr>
    
    <th scope='row'>" . $row['Fecha'] . "</th>
    <td>".$row['Zona'] ."</td>
    <td>" . $nombreMaquina . "</td>
    <td>" . $row['estado'] . "</td>
    <td>" . $nombreTecnico . "</td>
    <td>" . $nombreCliente . "</td>
    <td><a class='btn btn-primary ms-3' href=parte.php?id=".$row['ID_parte'].">Ver</a></td>
  </tr>";
    }
  }
  /**
   * Esta función devuelve el nombre de una maquina según su id;
   *
   * @param [int] $id_Maquina
   * @return [string]
   */
  function nombreMaquina($id_Maquina){
    
    $conPDO = conexion();
    $nombreMaquina = $conPDO->prepare("SELECT nombreMaquina FROM maquinas WHERE id_maquina='".$id_Maquina." '  ");
    $nombreMaquina->execute();
    $nombreMaquina->setFetchMode(PDO::FETCH_ASSOC);
    $nM = $nombreMaquina->fetch();
    return $nM['nombreMaquina'];
    
  }
/**
   * Esta función devuelve el nombre de un usuario según su id;
   *
   * @param [int] $id_Maquina
   * @return [string]
   */
  function nombreCliente($id_cliente){
    
    if($id_cliente == null){

      return "";
    }else{
      $conPDO = conexion();
      $nombreCliente = $conPDO->prepare("SELECT nombreOperario FROM _usuarios WHERE id_usuario='".$id_cliente." '  ");
      $nombreCliente->execute();
      $nombreCliente->setFetchMode(PDO::FETCH_ASSOC);
      $nC = $nombreCliente->fetch();
      return $nC['nombreOperario'];

    }
     
   
   
  }

  /**
   * Esta función escribe en pantalla la lista de averías pendientes de una maquina;
   *
   * @param void
   * @return void
   */
  function listaAveriasPendientesMaquina(){
    $id =$_GET["id"];
    $conPDO = conexion();
    $stmt = $conPDO->prepare("SELECT * FROM parteAveria WHERE estado='pendiente' AND maquinas_ID = '".$id."'");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

          while ($row = $stmt->fetch()) {
          $nombreMaquina = nombreMaquina($row['maquinas_ID']);
          $nombreCliente = nombreCliente($row['id_cliente']);
         
          if(($_SESSION['rol'] == 'tecnico' || $_SESSION['rol'] == 'administrador') && $_SESSION['seccion']==$row['Zona']){
    
          echo "
        <tr>
        
        <th scope='row'><a href='cogerParte.php?id_averia=".$row['ID_parte']."'>" . $row['Fecha'] . "</a></th>
        <td>".$row['Zona'] ."</td>
        <td>" . $nombreMaquina . "</td>
        <td>" . $row['estado'] . "</td>
        <td>" . $nombreCliente . "</td>
        <td><a class='btn btn-primary ms-3' href=parte.php?id=".$row['ID_parte'].">Ver</a></td>
        </tr>";

          }elseif( $_SESSION['rol']== 'tecnico') {

            echo "
            <tr>
            
            <th scope='row'>".$row['Fecha']."</th>
            <td>".$row['Zona'] ."</td>
            <td>" . $nombreMaquina . "</td>
            <td>" . $row['estado'] . "</td>
            <td>" . $nombreCliente . "</td>
            <td><a class='btn btn-primary ms-3' href=parte.php?id=".$row['ID_parte'].">Ver</a></td>
          </tr>";
          }elseif( $_SESSION['rol']== 'cliente') {

            echo "
            <tr>
            
            <th scope='row'>".$row['Fecha']."</th>
            <td>".$row['Zona'] ."</td>
            <td>" . $nombreMaquina . "</td>
            <td>" . $row['estado'] . "</td>
            <td>" . $nombreCliente . "</td>
            <td><a class='btn btn-primary ms-3' href=parte.php?id=".$row['ID_parte'].">Ver</a></td>
          </tr>";
          }


        }
     
  }
  /**
   * Esta función escribe en pantalla la lista de averías asignadas de una maquina;
   *
   * @param void
   * @return void
   */
  function listaAveriasAsignadasMaquina(){
    $id =$_GET["id"];
    $conPDO = conexion();
    $stmt = $conPDO->prepare("SELECT * FROM parteAveria WHERE estado='asignado'  AND maquinas_ID = '".$id."'");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    while ($row = $stmt->fetch()) {
      $nombreMaquina = nombreMaquina($row['maquinas_ID']);
      $nombreCliente = nombreCliente($row['id_cliente']);
      $nombreTecnico = nombreCliente($row['operarios_ID']);

      echo "
    <tr>
    
    <th scope='row'>" . $row['Fecha'] . "</th>
    <td>".$row['Zona'] ."</td>
    <td>" . $nombreMaquina . "</td>
    <td>" . $row['estado'] . "</td>
    <td>" . $nombreTecnico . "</td>
    <td>" . $nombreCliente . "</td>
    <td><a class='btn btn-primary ms-3' href=parte.php?id=".$row['ID_parte'].">Ver</a></td>
    
  </tr>";
    }
  }
  /**
   * Esta función escribe en pantalla la lista de averías cerradas de una maquina;
   *
   * @param void
   * @return void
   */
  function listaAveriasCerradasMaquina(){
    $id =$_GET["id"];
    $conPDO = conexion();
    $stmt = $conPDO->prepare("SELECT * FROM parteAveria WHERE estado='cerrado'  AND maquinas_ID = '".$id."'");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    while ($row = $stmt->fetch()) {
      $nombreMaquina = nombreMaquina($row['maquinas_ID']);
      $nombreCliente = nombreCliente($row['id_cliente']);
      $nombreTecnico = nombreCliente($row['operarios_ID']);


      echo "
    <tr>
    
    <th scope='row'>" . $row['Fecha'] . "</th>
    <td>".$row['Zona'] ."</td>
    <td>" . $nombreMaquina . "</td>
    <td>" . $row['estado'] . "</td>
    <td>" . $nombreTecnico . "</td>
    <td>" . $nombreCliente . "</td>
    <td><a class='btn btn-primary ms-3' href=parte.php?id=".$row['ID_parte'].">Ver</a></td>
  </tr>";
    }
  }
/**
   * Esta función escribe en pantalla la lista de averías pendientes de asignación una maquina;
   *
   * @param void
   * @return void
   */
  function listaAveriasPendientesTecnico($seccion){
    $id =$_GET["id"];
    $conPDO = conexion();
    $stmt = $conPDO->prepare("SELECT * FROM parteAveria WHERE estado='pendiente' AND zona = '".$seccion."'");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

      if($_SESSION['rol'] == 'tecnico' || $_SESSION['rol'] == 'administrador'){

        while ($row = $stmt->fetch()) {
          $nombreMaquina = nombreMaquina($row['maquinas_ID']);
          $nombreCliente = nombreCliente($row['id_cliente']);
         
    
          echo "
        <tr>
        
        <th scope='row'><a href='cogerParte.php?id_averia=".$row['ID_parte']."'>" . $row['Fecha'] . "</a></th>
        <td>".$row['Zona'] ."</td>
        <td>" . $nombreMaquina . "</td>
        <td>" . $row['estado'] . "</td>
        <td>" . $nombreCliente . "</td>
        <td><a class='btn btn-primary ms-3' href=parte.php?id=".$row['ID_parte'].">Ver</a></td>
      </tr>";
        }
      }elseif( $_SESSION['rol']== 'cliente') {

    while ($row = $stmt->fetch()) {
      $nombreMaquina = nombreMaquina($row['maquinas_ID']);
      $nombreCliente = nombreCliente($row['id_cliente']);
     

      echo "
    <tr>
    
    <th scope='row'>".$row['Fecha']."</th>
    <td>".$row['Zona'] ."</td>
    <td>" . $nombreMaquina . "</td>
    <td>" . $row['estado'] . "</td>
    <td>" . $nombreCliente . "</td>
    <td><a class='btn btn-primary ms-3' href=parte.php?id=".$row['ID_parte'].">Ver</a></td>
  </tr>";
    }
  }
  }
  /**
   * Esta función escribe en pantalla la lista de averías cerradas de un tecnico;
   *
   * @param void
   * @return void
   */
  function listaAveriasCerradasTecnico(){
    $id =$_GET["id"];
    $conPDO = conexion();
    $stmt = $conPDO->prepare("SELECT * FROM parteAveria WHERE estado='cerrado'  AND operarios_ID = '".$id."'");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    while ($row = $stmt->fetch()) {
      $nombreMaquina = nombreMaquina($row['maquinas_ID']);
      $nombreCliente = nombreCliente($row['id_cliente']);
       $nombreTecnico = nombreCliente($id);


      echo "
    <tr>
    
    <th scope='row'>" . $row['Fecha'] . "</th>
    <td>".$row['Zona'] ."</td>
    <td>" . $nombreMaquina . "</td>
    <td>" . $row['estado'] . "</td>
     <td>" . $nombreTecnico . "</td>
    <td>" . $nombreCliente . "</td>
    <td><a class='btn btn-primary ms-3' href=parte.php?id=".$row['ID_parte'].">Ver</a></td>
  </tr>";
    }
  }
  /**
   * Esta función escribe en pantalla la lista de averías asignadas de un tecnico;
   *
   * @param void
   * @return void
   */
  function listaAveriasAsignadasTecnico(){
    $id =$_GET["id"];
    $conPDO = conexion();
    $stmt = $conPDO->prepare("SELECT * FROM parteAveria WHERE estado = 'asignado' AND operarios_ID = '".$id."'");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);


    while ($row = $stmt->fetch()) {
      $nombreMaquina = nombreMaquina($row['maquinas_ID']);
      $nombreCliente = nombreCliente($row['id_cliente']);
      $nombreTecnico = nombreCliente($id);
      echo "
    <tr>
    
    <th scope='row'>".$row['Fecha']."</th>
    <td>".$row['Zona'] ."</td>
    <td>" . $nombreMaquina. "</td>
    <td>" . $row['estado'] . "</td>
    <td>" . $nombreTecnico . "</td>
    <td>" . $nombreCliente . "</td>
    <td><a class='btn btn-primary ms-3' href=parte.php?id=".$row['ID_parte'].">Ver</a></td>
  </tr>";
    }
  }
  /**
   * Esta función escribe en pantalla un parte de averia según su id.
   *
   * @param [int] $id_parte
   * @return void
   */
 function editarParte($id_parte){
  $conPDO = conexion();
  $stmt = $conPDO->prepare("SELECT * FROM parteAveria WHERE estado = 'asignado' AND ID_parte = '".$id_parte."'");
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  while ($row = $stmt->fetch()) {
   
    if($row['operarios_ID'] == $_SESSION['id_usuario']){

      echo"
      <td><a class='btn btn-primary' href=cogerParte.php?id_averia=".$id_parte.">Editar Parte</a></td>
    </tr>";
    }
    
  }


  }
/**
 * Esta función devuelve la dirección url del pdf que corresponde a los planos de la maquina según su id.
 *
 * @param [id] $id_Maquina
 * @return [string] $pM
 */
  function planoMaquina($id_Maquina){
    
    $conPDO = conexion();
    $nombreMaquina = $conPDO->prepare("SELECT planos FROM maquinas WHERE id_maquina='".$id_Maquina." '  ");
    $nombreMaquina->execute();
    $nombreMaquina->setFetchMode(PDO::FETCH_ASSOC);
    $pM = $nombreMaquina->fetch();
    return $pM['planos'];
    
  }
  /**
   * Esta función devuelve la dirección url del pdf que corresponde a los manuales de la maquina según su id.
   *
   * @param [int] $id_Maquina
   * @return [string] $pM
   */
  function manualMaquina($id_Maquina){
    
    $conPDO = conexion();
    $nombreMaquina = $conPDO->prepare("SELECT manuales FROM maquinas WHERE id_maquina='".$id_Maquina." '  ");
    $nombreMaquina->execute();
    $nombreMaquina->setFetchMode(PDO::FETCH_ASSOC);
    $pM = $nombreMaquina->fetch();
    return $pM['manuales'];
    
  }
   /**
   * Esta función devuelve la dirección url del pdf que corresponde a los despieces de la maquina según su id.
   *
   * @param [int] $id_Maquina
   * @return [string] $pM
   */
  function despieceMaquina($id_Maquina){
    
    $conPDO = conexion();
    $nombreMaquina = $conPDO->prepare("SELECT despiece FROM maquinas WHERE id_maquina='".$id_Maquina." '  ");
    $nombreMaquina->execute();
    $nombreMaquina->setFetchMode(PDO::FETCH_ASSOC);
    $pM = $nombreMaquina->fetch();
    return $pM['despiece'];
    
  }



