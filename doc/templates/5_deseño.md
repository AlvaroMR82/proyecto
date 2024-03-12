# FASE DE DISEÑO

## Modelo conceptual de dominio de aplicación y/o diagrama de clases [usando UML, ConML o lenguaje similar].
![alt text](<../img/Árbol de decisiones.png>)
## Casos de uso [descritos en archivos y/o mediante diagramas; debe incluir el tipo(s) de usuario involucrado en cada caso de uso].

En esta aplicación hay tres roles, el administrador, el técnico, y el cliente.

El administrador ademas de las funciones de técnico y cliente gestiona los usuarios las maquinas y los clientes de la aplicación.

El cliente solo puede abrir partes de incidencia en las maquinas de su zona.

El técnico puede acceder a las maquinas bajo su gestión, acceder a la documentación de las mismas y coger las incidencias de estas.



## Diseño de interfaz de usuario [maquetas o diagramas...].

## Diagrama de base de datos.

Operario:
Atributos: id_usuario (clave primaria),nombreUsuario,pass, nombreOperario, Apellidos, sección, Email, Teléfono,sección.

Maquina:
Atributos: id_maquina (clave primaria), nombreMaquina, foto, planos, manuales, despiece, sección.

Parte de Avería:
Atributos: id_Parte (clave primaria), fecha, sección, Operario_ID (clave externa que hace referencia al ID del Operario), Maquina_ID (clave externa que hace referencia al ID de la Máquina), estado, incidencia, solución, fecha de cierre,id_cliente.

Ahora, definamos las relaciones:
La entidad "usuario" se relaciona con la entidad "Parte de Avería" a través de la clave externa "usuario_ID".
La entidad "maquina" se relaciona con la entidad "Parte de Avería" a través de la clave externa "Maquina_ID".
La entidad "cliente" se relaciona con la entidad "Parte de Avería" a través de la clave externa "usuario_ID".

Este diagrama muestra las entidades principales ("Operario", "Maquina", "Cliente" y "Parte de Avería") y sus relaciones.
![alt text](<../img/Diagrama base de datos CWM.png>)
## Diagrama de componentes de software que componen el producto y su implementación.

