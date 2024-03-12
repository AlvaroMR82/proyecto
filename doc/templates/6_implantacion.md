# FASE DE IMPLEMENTACIÓN

## Manual técnico:

### Información de instalación:
Se recomienda la instalación en un servidor con dominio para un acceso desde cualquier punto a traves de internet.

Esta app esta dockerizada para su fácil lanzamiento, ademas viene con un código de ejemplo implementado que instalara de manera automática cuando se accede al login. Se crea una base de datos con ejemplos de usuarios maquinas y mensajes para que cuando se instale tenga algo de información visual. Después puedes adaptarla al uso que quieras darle.

  - Credenciales administrador:
    - Usuario: alvaro	
    - Password: 1234

1. Descarga y abre el repositorio 
   
   
   		git clone https://gitlab.iessanclemente.net/dawd/a20alvaromr.git

2. Levantar los containers.
   
   1.  Si estas en Linux dentro del directorio del proyecto escribir en la terminal.
   
				docker-compose up -d

   2. Si estas en windows tendrás que tener dockers instalado y levantar desde el programa los containers.

3. Para ver de manera local la app desde cualquier navegador accede al  localhost.



### Información relacionada con la administración del sistema:

* Copias de seguridad del sistema semanal.
* Copias de seguridad de bases de datos semanal.
* Gestión de usuarios periodica.
* Gestion de seguridad y credenciales.


### Información de mantenimiento del sistema:

* Corregir errores.
* Agregar nuevas funciones.
* Adaptación mediante actualizaciones de software y/o hardware.

## Administración de incidentes

Ante cualquier incidencia ponerse en contacto con el administrador del sistema.

## Manual de usuario

* Los usuarios, tanto técnicos como clientes serán formados por el administrador del sistema quien sera el encargado de determinar sus roles.
* Quedaría pendiente elaborar una gia rápida de inicio para que los usuarios puedan iniciar el uso del software de manera adecuada lo antes posible.
* Cunado la adaptación haya finalizado se elaboraría un manual de usuario que contuviera toda la información de uso y la resolución de incidencias 
