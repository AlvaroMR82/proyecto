<?php

function tabalaClientes()
{
    $conPDO = conexion();

    $sql = " CREATE TABLE IF NO EXISTS  clientes (
        id INT(6) AUTO_INCREMENT PRIMARY KEY, 
        nombreCliente VARCHAR(30) NOT NULL,
        seccion VARCHAR(30) NOT NULL
        );";

    $conPDO->exec($sql);

    $conPDO = null;
}
function tabalaMaquinas()
{
    $conPDO = conexion();

    $sql = " CREATE TABLE IF NO EXISTS  clientes (
        id INT(6) AUTO_INCREMENT PRIMARY KEY, 
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
function tabalaOperarios()
{
    $conPDO = conexion();

    $sql = " CREATE TABLE IF NO EXISTS  clientes (
        id INT(6) AUTO_INCREMENT PRIMARY KEY, 
        nombreOperario VARCHAR(30) NOT NULL,
        apellido VARCHAR(30),
        email VARCHAR(30),
        telefono int(9),
        seccion VARCHAR(30) NOT NULL
        );";

    $conPDO->exec($sql);

    $conPDO = null;
}
function tabalaUsuarios()
{
    $conPDO = conexion();

    $sql = " CREATE TABLE IF NO EXISTS  clientes (
        id INT(6) AUTO_INCREMENT PRIMARY KEY, 
        nombreUsuario VARCHAR(30) NOT NULL,
        rol VARCHAR(30),
        pass VARCHAR(500) NOT NULL
        );";

    $conPDO->exec($sql);

    $conPDO = null;
}
function tabalaMensajes()
{
    $conPDO = conexion();

    $sql = " CREATE TABLE IF NO EXISTS  clientes (
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

    $sql = " CREATE TABLE IF NO EXISTS  clientes (
       id_ParteAveria INT PRIMARY KEY,
       Fecha_apertura DATE,
       Fecha_cierre DATE,
       Zona VARCHAR(50),
       Operario_id INT,
       Maquina_id INT,
       FOREIGN KEY (Operario_ID) REFERENCES Operario(id),
       FOREIGN KEY (id) REFERENCES Maquina(id)
        );";

    $conPDO->exec($sql);

    $conPDO = null;
}
function tablaClientes()
{
    $conPDO = conexion();

    $sql = " CREATE TABLE clientes (
        id_cliente INT(6) AUTO_INCREMENT PRIMARY KEY,
        nombre_cliente VARCHAR(50),
        zona VARCHAR(50)
    );";

    $conPDO->exec($sql);

    $conPDO = null;
}
function tablaUsuariosCompleta()
{
    $conPDO = conexion();

    $sql = "CREATE TABLE _usuarios (
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
   
    

    $operarios= [
        ['alvaro', 'administrador', '1234', 'Alvaro', 'Mosquera Rial', 'a@a.com', '123456789', 'lacados'],
        ['ramon', 'tecnico', '1234', 'Ramon', 'Garcia', 'a@a.com', '123456789', 'extrusion'],
        ['juan', 'cliente', '1234', 'Juan', 'Magan', 'juan1@example.com', '123456789', 'anodizados'],
        ['pepe', 'tecnico', '1234', 'Pepe', 'Prado', 'juan1@example.com', '123456789', 'anodizados'],
        ['juan', 'tecnico', '1234', 'Juan', 'Pérez', 'juan1@example.com', '123456789', 'lacados'],
        ['maría', 'cliente', '1234', 'María', 'Gómez', 'maria2@example.com', '987654321', 'anodizados'],
        ['carlos', 'tecnico', '1234', 'Carlos', 'Martínez', 'carlos3@example.com', '555555555', 'extrusion'],
        ['laura', 'cliente', '1234', 'Laura', 'Sánchez', 'laura50@example.com', '999999999', 'anodizados']

    ];



foreach ($operarios as $op){

    $usuario = $op[1];
    $nombre = $op[2];
    $pass = $op[3];
    $apellido = $op[4];
    $telefono = $op[5];
    $email = $op[6];
    $zona = $op[7];
    $rol = $op[8];
    
  introducirDatosUsuario($usuario,$pass,$nombre,$apellido,$telefono,$email,$zona,$rol);
    
   
}


   
$conPDO = null;
    
}

function introducirDatosUsuario($usuario,$pass,$nombre,$apellido,$telefono,$email,$zona,$rol){

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
    
    $conPDO = null;
    
}
