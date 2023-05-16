### Pasos a seguir una vez clonado el repositorio

#### **modificar el archivo .env-ejemplo por .env con los datos para el acceso a su base de datos**
~~~
el archivo .env define las variables de entorno de la aplicacion, 
las cuales pueden ser accedidas por los servicios dentro del contenedor
~~~
#### **ejecutar el siguiente script : sudo chmod +775 ./ -R dentro de la carpeta raiz del proyecto donde se encuentra el docker-compose.yml**
~~~
debemos cambiar los permisos sino, no podremos acceder al sitio, podriamos hacer en las carpeta correspondientes pero para
fines prácticos lo hacemos en la carpeta raiz 
para acceso al sitio usar la siguiente direccion **ip: 192.168.20.10**
~~~

#### **El docker compose ahora define una red para conexion interna**

Para trabajar correctamente entre contenedores cree una network, en la cual los servicios pueden comunicarse y funcionar de manera correcta

