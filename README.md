### Programación Web Dinámica **2023**
## Trabajo Practico N° 4 - MVC
# MODELOS
En este trabajo práctico empezaremos a crear nuestras clases que serán los modelos para trabajar en nuestra aplicación.

---
Modelar las siguientes clases:
- Socio
- Editorial
- Autor
- Libro
- Categoria (ejemplo: cuentos, fábulas, novelas, etc)
- Genero (ejemplo: terror, ciencia ficcion, policiales, etc)
- Prestamo

1 - Todas las clases deben extender de la clase **ModelBase** que implementa **Serializar**.

2 - Todas las clases tiene que tener los métodos get y set para los atributos a excepcion del **id** que solo tendra el metodo **getId**

3 - Todos los atributos tienen que ser **private**

Atributos de la clase **Socio**:
* id (int)
* nombre_apellido (string)
* fecha_alta (date)
* activo (int) valor 0 o 1
* telefono (int)
* direccion (string)

Atributos de la clase **Autor**:
* id (int)
* nombre_Apellido (string)

Atributos de la clase **Categoria**:
* id (int)
* descripcion (string)

Atributos de la clase **Genero**:
* id (int)
* descripcion (string)


Atributos de la clase **Editorial**:
* id (int)
* Nombre (string)


Atributos de la clase **Libro**:
* id (int)
* titulo (string)
* editorial (Editorial)
* autor (Autor[])
* genero (Genero)
* cant_paginas (int)
* anio_publicacion (int)
* estado(string) con tres posibles estados 

  + **Activo**
  + **Inactivo**
  + **Prestado**

siendo **Activo** el estado predeterminado.
Estos estados son seteados con constante:
ejemplo: inicializamos **estado:'$this->estado = static::ACTIVO'**
donde **static::ACTIVO** corresponte a la constante **Const ACTIVO = "activo"**

Atributos de la clase **Prestamo**:
* id (int)
* socio (Socio)
* libro (Libro)
* fecha_desde (date)
* fecha_hasta (date)
* fecha_dev (?date) este atributo se debe inicializar en null

### **Métodos especiales de esta Clase**
---

**diasRetraso($id_libro):int**  debe devolver la cantidad de días que un libro se encuentra retrasado, si aún esta dentro del rango de días debe devolver **0**

**cantLibrosPrestados($id_socio):int** debe devolver cantidad de libros que un socio tiene aún en su poder.

### Diagrama Base de la Aplicación
---

![diagrama de la app](./asset/diagramaAppLibros.png)



