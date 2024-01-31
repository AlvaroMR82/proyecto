<?php
include("php/libreria/libreria.php");





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

//todo: revisar los nombre de los ids para poner cada uno con su tabla.
