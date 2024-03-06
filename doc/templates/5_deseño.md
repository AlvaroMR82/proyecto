# FASE DE DESEÑO

## Modelo conceptual do dominio da aplicación e/ou Diagrama de clases [usando UML, ConML, ou linguaxe semellante].

## Casos de uso [descritos en fichas e/ou mediante esquemas; deben incluír o(s) tipo(s) de usuario implicados en cada caso de uso].

## Deseño de interface de usuarios [mockups ou diagramas...].

## Diagrama de Base de Datos.

Operario:

Atributos: ID (clave primaria), Nombre, Apellidos, DNI, Zona, Email, Teléfono.
Maquina:

Atributos: ID_Maquina (clave primaria), Nombre_Maquina, Zona_Maquina.
Cliente:

Atributos: ID_Cliente (clave primaria), Nombre_Cliente.
Parte de Avería:

Atributos: ID_ParteAveria (clave primaria), Fecha, Zona, Operario_ID (clave externa que hace referencia al ID del Operario), Maquina_ID (clave externa que hace referencia al ID de la Máquina).
Ahora, definamos las relaciones:

La entidad "Operario" se relaciona con la entidad "Parte de Avería" a través de la clave externa "Operario_ID".
La entidad "Maquina" se relaciona con la entidad "Parte de Avería" a través de la clave externa "Maquina_ID".
La entidad "Cliente" puede tener una relación con la entidad "Maquina" si es relevante registrar qué cliente utiliza qué máquina.
Diagrama ER (entidad-relación) simplificado:

lua
Copy code
+----------------+          +----------------------+
|    Operario    |          |    Parte de Avería    |
+----------------+          +----------------------+
| ID (PK)        |<---------| ID_ParteAveria (PK)   |
| Nombre         |          | Fecha                |
| Apellidos      |          | Zona                 |
| DNI            |          | Operario_ID (FK)     |
| Zona           |          | Maquina_ID (FK)      |
| Email          |          +----------------------+
| Teléfono       |
+----------------+
        |
        |
        V
+----------------+
|    Maquina     |
+----------------+
| ID_Maquina (PK)|
| Nombre_Maquina |
| Zona_Maquina   |
+----------------+
        |
        |
        V
+----------------+
|    Cliente     |
+----------------+
| ID_Cliente (PK)|
| Nombre_Cliente |
+----------------+

Este diagrama muestra las entidades principales ("Operario", "Maquina", "Cliente" y "Parte de Avería") y sus relaciones.
![diagrama base de datos](./img/Diagrama base de datos CWM.png)
## Diagrama de compoñentes software que constitúen o produto e de despregue.

