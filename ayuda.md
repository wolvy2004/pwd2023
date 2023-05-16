### Pasos a seguir una vez clonado el repositorio

## Ejecutar 
`docker compose run composer composer install`

este comando sirve para poder instalar todas las dependencias para correr la aplicacion ya que cuando el repositorio es clonado no tiene las mismas. estas Dependencias estan 
declaradas en el archivo **composer.json**, si en vez de composer install ejecután composer update también se las instalará pero a la última version disponible. por
ahora nos manejaremos con  **composer install** para que el versionado quede fijo.


#### **modificar el archivo .env-ejemplo por .env con los datos para el acceso a su base de datos**
~~~
el archivo .env define las variables de entorno de la aplicacion, 
las cuales pueden ser accedidas por los servicios dentro del contenedor
~~~

#### **El docker compose ahora define una red para conexion interna**

Para trabajar correctamente entre contenedores cree una network, en la cual los servicios pueden comunicarse y funcionar de manera correcta

