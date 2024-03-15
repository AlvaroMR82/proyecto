# Proyecto fin de ciclo

El nombre de esta app web es CWM.

Abreviatura de Control web de maquinas.

## Descripción

Voy a realizar un proyecto de gestión de mantenimiento de máquinas/instalaciones donde a traves de una interface web vamos a poder gestionar, todo lo referido a su mantenimiento.
	
- Control de las maquinas/instalaciones, uso y ubicación si fuera preciso.
- Los operarios que ejecutan los mantenimientos.
- Las averías de las maquinas/instalaciones y sus soluciones.
- Consumo de repuestos y consumibles por el uso. 
- Toda la documentación referente a la maquina en cuestión planos, manuales...
- Gestión del almacén de repuestos

El mayor beneficio de esta app es que tanto los técnicos como los operarios dispongan de la información necesaria a la hora de poder realizar las tareas designadas.
	   

## Instalación / Puesta en marcha


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

## Uso
Esta app viene acompañada de una interfaz gráfica de usuario que permite un manejo mas intuitivo de las funciones que aporta, según tu rol podrás consultar o realizar las acciones necesarias para los registros y consulta que necesites en cada momento. 

	- Como usuario tenderas tu propio login y contraseña y el propio programa identificara las funciones que puedes realizar.
	- Como Técnico podrás ver las maquinas bajo tu administración, toda su documentación 
	  y gestionar los avisos e incidencia por parte de los clientes.
	- Como Cliente podrás ver las maquinas bajo tu administración, y dar los avisos necesarios a los técnicos. 
 
## Sobre el autor
 Técnico de instalaciones y mantenimiento industrial desde 2004. Con una amplia experiencia en el sector industrial en 2020 inicio una nueva etapa como programador web. 
 Gracias a mis conocimientos en el entorno industrial y a mis nuevas aptitudes de programación creo que este va a ser el proyecto que mejor fusione los conocimientos de las dos ramas en las que estoy especializado.

 Tecnologías que domino.

- HTML
- CSS
- JAVASCRIPT
- SQL
- JAVA
- PHP
- Dockers
	
 Tecnologías que estoy aprendiendo.

- c# asp.net	
	
 Correo electrónico
- alvaromosquerarial@hotmail.com 
	

## Licencia

GNU GENERAL PUBLIC [LICENSE](/LICENSE) Version 3, 29 June 2007

## Índice 

1. [Anteproyecto](doc/templates/Anteproxecto.md)
    * 1.1. [Idea](doc/templates/1_idea.md)
    * 1.2. [Necesidades](doc/templates/2_necesidades.md)
2. [Análisis](doc/templates/3_analise.md)
3. [Planificación](doc/templates/4_planificacion.md)
4. [Diseño](doc/templates/5_deseño.md)
5. [Implantación](doc/templates/6_implantacion.md)




