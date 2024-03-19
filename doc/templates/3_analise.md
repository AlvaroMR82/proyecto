# REQUISITOS DEL SISTEMA

Este proyecto requerirá de un servidor web y un dominio para su correcto funcionamiento.

## Descripción general

Gestor web de maquinas CWM  se encarga de recopilar la información relativa a los trabajos de mantenimiento y reparación de las instalaciones a supervisar, ademas de ayudar a los técnicos con la información necesaria de las máquinas, tanto de manuales de funcionamiento  como de planos. 

## Funcionalidades

Nuestro proyecto a traves del administrador configurara las maquinas, los clientes y los técnicos.

Después estos según sus roles podrán dar de alta los partes, administrarlos y cerrarlos para que quede registro de todo lo sucedido.

En todo momento se puede filtrar por maquina, técnico o cliente los partes generados.
 
## Requerimientos no funcionales
Requisitos en cuanto a rendimiento, seguridad, etc. si es aplicable

## Tipos de usuarios

  - Administrador: 
    - Actualiza y da de alta las maquinas.
    - Actualiza y da de alta los clientes.
    - Actualiza y da de alta los técnicos.
    - Puede ver todas las maquinas de todas las secciones.
    - Puede ver todas los clientes de todas las secciones.
    - Puede ver todas los técnicos de todas las secciones.
    - Puede ver todas las incidencias.
    - Puede crear incidencias en todas las maquinas.
  - Técnico:
    - Puede coger las incidencias y resolverlas, pero solo en su sección.
    - No puede crear incidencias.
    - Puede consultar todas las maquinas y su documentación asi como sus incidencias.
  - Cliente:
    - Puede ver todas las maquinas pero solo puede abrir incidencias el las que son de su sección.
    - Solo puede ver los técnicos de su sección.
    - No puede cerrar incidencias.
  - Todos:
    - Pueden ver y mandar mensajes generales de advertencia o peligro.
    - Mandar emails a todos los usuarios.
    - Ver los teléfonos de todos los usuarios.
  

## Evaluación de la viabilidad técnica del proyecto.

### Hardware requerido
  Servidor web conectado a la red de las instalaciones y en su caso a Internet.
  
  ![alt text](<../img/diagrama de instalación.png>)

### Software
Ser necesita un navegador web que normalmente hay en todos los sistemas operativos.

## Mejoras futuras

- Uso de códigos QR para que dentro de la ubicación de las maquinas se pueda encontrar con mejor facilidad la documentación.
- Poder subir imágenes en los apartados de las averías para que queden en conjunto con las descripciones de las mismas.
- programación de actividades periódicas para su activación automática, por ejemplo revisiones mensuales de niveles en los depósitos de aceite, con su correspondiente checklist para dejar constancia.
- Localización por gps de las maquinas para que en caso de que se encuentren en lugares dispersos o en localización de clientes externos de la empresa.
 