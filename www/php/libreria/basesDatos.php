<?php
function primeraConexion(){
    $servername = "db";
    $username = "root";
    $password = "test";
    try {
      //1. Conexión a base de datos
      $conPDO = new PDO("mysql:host=$servername;dbname=dbname", $username, $password);
      //2. Forzar excepciones
      $conPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
      die("Erro na conexión mensaxe: " . $ex->getMessage());
    }
  
   try {
    
    $sql = " CREATE DATABASE IF NOT EXISTS  mantenimiento;";
    $conPDO->exec($sql);

    tablaUsuarios();
    tablaUsuariosDatos();
    tablaMaquinas();
    tablaMensajes();
    tablaMaquinsDatos();
    tablaPartes();
    inttroducirPartes();

    $conPDO = null;
    
   } catch (PDOException $ex) {
    die("Erro na conexión mensaxe: " . $ex->getMessage());
   }


}

function tablaMaquinas()
{
    $conPDO = conexion();

    $sql = " CREATE TABLE IF NOT EXISTS  maquinas (
        id_maquina INT(6) AUTO_INCREMENT PRIMARY KEY, 
        nombreMaquina VARCHAR(30) NOT NULL,
        foto VARCHAR(30),
        planos VARCHAR(30),
        manuales VARCHAR(30),
        despiece VARCHAR(30),
        seccion VARCHAR(30) NOT NULL
        );";

    $conPDO->exec($sql);

    $conPDO = null;
}

function tablaMensajes()
{
    $conPDO = conexion();

    $sql = " CREATE TABLE IF NOT EXISTS  mensajes (
        id INT(6) AUTO_INCREMENT PRIMARY KEY, 
        mensaje VARCHAR(500) NOT NULL,
        prioridad VARCHAR(30) NOT NULL,
        nombre VARCHAR(30),
        zona VARCHAR(30) NOT NULL
        );";

    $conPDO->exec($sql);

    $conPDO = null;
}

function tablaPartes()
{
    $conPDO = conexion();
    $sql = " CREATE TABLE IF NOT EXISTS  parteAveria (
       id_ParteAveria INT PRIMARY KEY,
       Fecha_apertura DATE,
       Fecha_cierre DATE,
       seccion VARCHAR(50),
       tecnico_id INT,
       maquina_id INT,
       cliente_id
       FOREIGN KEY (tecnico_id) REFERENCES _usuario(id_usuario),
       FOREIGN KEY (cliente_id) REFERENCES _usuario(id_usuario),
       FOREIGN KEY (id_maquina) REFERENCES maquina(id_maquina)
        );";


$sql2= "CREATE TABLE IF NOT EXISTS `parteAveria` (
    `ID_parte` int NOT NULL,
    `Fecha` varchar(50) DEFAULT NULL,
    `Zona` varchar(50) DEFAULT NULL,
    `operarios_ID` int DEFAULT NULL,
    `maquinas_ID` int DEFAULT NULL,
    `estado` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'pendiente',
    `incidencia` varchar(500) NOT NULL,
    `solucion` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
    `fecha_cierre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
    `id_cliente` int DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;";

    $conPDO->exec($sql2);


    $conPDO = null;
}

function tablaUsuarios()
{
    $conPDO = conexion();

    $sql = "CREATE TABLE IF NOT EXISTS _usuarios (
        id_usuario INT(6) AUTO_INCREMENT PRIMARY KEY, 
        nombreUsuario VARCHAR(30) NOT NULL,
        rol VARCHAR(30) NOT NULL,
        pass VARCHAR(500) NOT NULL,
        nombreOperario VARCHAR(30) NOT NULL,
        apellido VARCHAR(30),
        email VARCHAR(30),
        telefono int(9),
        seccion VARCHAR(30)
        );";

    $conPDO->exec($sql);

    $conPDO = null;
}
function tablaUsuariosDatos()
{
   
    
    $conPDO = conexion();
    $stmt = $conPDO->prepare("SELECT * FROM _usuarios");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
  
    if ($stmt->rowCount() == 0) {

    $operarios= [
        ['alvaro', 'administrador', '1234', 'Alvaro', 'Mosquera Rial', 'a@a.com', '123456789', 'lacados'],
        ['ramon', 'tecnico', '1234', 'Ramon', 'Garcia', 'a@a.com', '123456789', 'extrusion'],
        ['juan', 'cliente', '1234', 'Juan', 'Magan', 'juan1@example.com', '123456789', 'anodizados'],
        ['pepe', 'tecnico', '1234', 'Pepe', 'Prado', 'juan1@example.com', '123456789', 'anodizados'],
        ['juanito', 'tecnico', '1234', 'Juan', 'Pérez', 'juan1@example.com', '123456789', 'lacados'],
        ['maría', 'cliente', '1234', 'María', 'Gómez', 'maria2@example.com', '987654321', 'lacados'],
        ['carlos', 'tecnico', '1234', 'Carlos', 'Martínez', 'carlos3@example.com', '555555555', 'extrusion'],
        ['vanessa', 'tecnico', '1234', 'vanessa', 'Gonzalez', 'vanessa@example.com', '999999999', 'lacados'],
        ['jose', 'cliente', '1234', 'Jose', 'Martinez', 'Jose@example.com', '999999999', 'extrusion'],
        ['antonio', 'cliente', '1234', 'antonio', 'Garrido', 'antonio@example.com', '999999999', 'lacados'],
        ['raul', 'cliente', '1234', 'Raul', 'Rial', 'Raul@example.com', '999999999', 'extrusion'],
        ['rafael', 'tecnico', '1234', 'Rafael', 'Seco', 'rafael@example.com', '999999999', 'anodizados'],
    ];



foreach ($operarios as $op){

    $usuario = $op[0];
    $rol = $op[1];
    $pass = $op[2];
    $nombre = $op[3];
    $apellido = $op[4];
    $email = $op[5];
    $telefono = $op[6];
    $zona = $op[7];
   
   
    
  introducirDatosUsuario($usuario,$pass,$nombre,$apellido,$telefono,$email,$zona,$rol);
}

   
}


   
$conPDO = null;
    
}

function introducirDatosUsuario($usuario,$pass,$nombre,$apellido,$telefono,$email,$zona,$rol){
   

      try{
        $hasheado = password_hash($pass, PASSWORD_DEFAULT);

        $conPDO = conexion();
        $stmt = $conPDO->prepare("INSERT INTO _usuarios (nombreUsuario,rol, pass, nombreOperario, apellido, email, telefono, seccion ) values (:nombreUsuario, :rol, :pass, :nombreOperario, :apellido, :email ,:telefono, :seccion)  ;");
        $stmt->bindParam(':nombreUsuario', $usuario);
        $stmt->bindParam(':rol', $rol);
        $stmt->bindParam(':pass', $hasheado);
        $stmt->bindParam(':nombreOperario', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':seccion', $zona);
        $stmt->execute();

      }catch (PDOException $ex) {
        echo"Completa el formulario.";
        die("Erro na conexión mensaxe: " . $ex->getMessage());
       
      }
   
    
    $conPDO = null;
    
}

function tablaMaquinsDatos()
{
   

    $conPDO = conexion();
    $stmt = $conPDO->prepare("SELECT * FROM maquinas ");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
  
    if ($stmt->rowCount() == 0) {
        $maquinas= [
            ['Lacado Vertical', 'imagenes/vertical.jpg','','','', 'lacados'],
            ['Lacado Horizontal', 'imagenes/vertical.jpg' ,'','','', 'lacados'],
            ['Lacado Madera', 'imagenes/vertical.jpg','','','', 'lacados'],
            ['Anodizado 1', 'imagenes/vertical.jpg','','','', 'anodizados'],
            ['Pulidora ', 'imagenes/vertical.jpg','','','', 'anodizados'],
            ['Granalladora', 'imagenes/vertical.jpg','','','', 'anodizados'],
            ['Prensa 16', 'imagenes/vertical.jpg','','','', 'extrusion'],
            ['Prensa 3', 'imagenes/vertical.jpg','','','', 'extrusion'],
            ['fundicion','imagenes/vertical.jpg','','','', 'extrusion']
    
        ];
    
    
    
    foreach ($maquinas as $op){
    
        $nombreMaquina = $op[0];
        $foto = $op[1];
        $planos = $op[2];
        $manuales = $op[4];
        $despiece = $op[3];
        $seccion = $op[5];
       
       
        
      introducirDatosMaquinas($nombreMaquina,$foto,$planos,$manuales,$despiece,$seccion);
        
       
    }
    
    }

    

   
$conPDO = null;
    
}
function introducirDatosMaquinas($nombreMaquina,$foto,$planos,$manuales,$despiece,$seccion){

    
    $conPDO = conexion();
    $stmt = $conPDO->prepare("INSERT INTO maquinas (nombreMaquina,foto, planos, manuales, despiece, seccion) values (:nombreMaquina, :foto, :planos, :manuales, :despiece, :seccion)  ;");
    $stmt->bindParam(':nombreMaquina', $nombreMaquina);
    $stmt->bindParam(':foto', $foto);
    $stmt->bindParam(':planos', $planos);
    $stmt->bindParam(':manuales', $manuales);
    $stmt->bindParam(':despiece', $despiece);
    $stmt->bindParam(':seccion', $seccion);
    $stmt->execute();
    
    $conPDO = null;
    
}

function inttroducirPartes(){

$conPDO = conexion();
$stmt = $conPDO->prepare("select * from parteAveria");
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);

if($stmt->rowCount() == 0 ){

    $sql = "INSERT INTO `parteAveria` (`ID_parte`, `Fecha`, `Zona`, `operarios_ID`, `maquinas_ID`, `estado`, `incidencia`, `solucion`, `fecha_cierre`, `id_cliente`) VALUES
    (10, '06/02/2024', 'Extrusion', 6, 14, 'asignado', 'La puerta del horno de fundicion esta rota.', 'Reparar puerta.', NULL, 3),
    (11, '06/02/2024', 'Lacados', 12, 2, 'cerrado', 'Lacado atascado.', 'Percha torcida. se recoloca y se pone en marcha.', NULL, 1),
    (13, '22/02/2024', 'Lacados', 1, 2, 'asignado', 'Puertas de lacados horizontal no se abren.', NULL, NULL, 1),
    (14, '26/02/2024', 'Lacados', 12, 1, 'cerrado', 'La cadena de transporte va a golpes.', NULL, NULL, 1),
    (15, '26/02/2024', 'Lacados', 12, 2, 'cerrado', 'La malla del ciclon esta rota.', 'Cambiar la malla del ciclon\nReviar los engranajes\n', NULL, 1),
    (16, '26/02/2024', 'Lacados', 1, 3, 'asignado', 'Las guias de los bodoques del horno estan gatadas e incluso afrietadas por el uso.', NULL, NULL, 1),
    (17, '26/02/2024', 'Anodizados', 2, 4, 'pendiente', 'Rotura de un cable del polipasto del robot doble.', NULL, NULL, 1),
    (18, '26/02/2024', 'Anodizados', 2, 5, 'pendiente', 'Al hacer varias pasadas los motores se calientan y saltan las protecciones.', NULL, NULL, 1),
    (19, '26/02/2024', 'Anodizados', 2, 6, 'pendiente', 'La zona de la derecha de la granalladora tiene desgaste y pierde la granalla.', NULL, NULL, 1),
    (20, '26/02/2024', 'Extrusion', 6, 7, 'pendiente', 'Chatarrera de la prensa esta atascada y no se mueve.', NULL, NULL, 1),
    (21, '26/02/2024', 'Extrusion', 6, 14, 'pendiente', 'La refrigeración de la puerta del horno esta rota y pierde agua.', NULL, NULL, 1),
    (22, '26/02/2024', 'Extrusion', 6, 15, 'pendiente', 'El alumbrado de la prensa 16 tiene muchos focos apagados.', NULL, NULL, 1),
    (23, '29/02/2024', 'lacados', NULL, 1, 'pendiente', 'Hormo de polimerizado hecha mucha pavesa.', NULL, NULL, 14),
    (24, '29/02/2024', 'lacados', NULL, 3, 'pendiente', 'Embolsadora no hace bien el cierre y pierde vacio en el horno.', NULL, NULL, 14),
    (25, '29/02/2024', 'lacados', NULL, 2, 'pendiente', 'Robot numero 1 de las cubas tiene la lampara de actividad siempre apagada.', NULL, NULL, 14),
    (26, '29/02/2024', 'lacados', NULL, 3, 'pendiente', 'Embolsadora no hace bien el cierre y pierde vacio en el horno.', NULL, NULL, 14);";
    
    $conPDO->exec($sql);
    
}


$conPDO = null;

}