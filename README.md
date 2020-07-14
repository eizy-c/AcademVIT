ACADEMVIT. 

Para poder utilizar este proyecto, debes tener los siguientes requisitos:

1) debes tener la versión de PHP mayor o igual a la 7.2.5. 
para mas información visita la documentación oficial de Laravel: https://laravel.com/docs/7.x

2) debes tener instalado composer en tu equipo: https://getcomposer.org/

3) si utilizas windows, puedes descargar el programa git desde la página oficial: https://gitforwindows.org/

Si cumples con estos prerequisitos, entonces podrás instalar este proyecto.

Pasos para instalar este proyecto correctamente:

1) descarga este proyecto o clónalo con el comando: 

git clone git://github.com/schacon/grit.git

2) ejecutar el comando: 

<pre>$ composer install </pre>

(esto es para descargar las dependencias de php)

3) copiar el archivo ".env.example" y pegarlo con el nombre: ".env". Si estas con el sistema gitforwindows, o en linux o mac, puedes ejecutar el siguiente comando: 

cp .env.example .env

4) debemos generar una nueva llave de laravel con el siguiente comando:

<pre>$ php artisan key:generate</pre>

5) Configura la nueva base de datos modificando el archivo ".env":

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=permisos_bd
DB_USERNAME=root
DB_PASSWORD=

6) ejecuta <pre>$ php artisan migrate --seed</pre>

(para migrar las tablas en la base de datos y insertar las seeder)

7) ejecuta <pre>$ npm install && npm run dev</pre>

(esto es para descargar las dependencias de javascript y compilar los archivos js)

8) luego ejecuta 

<pre>$  php artisan serve </pre>

y prueba el proyecto que debe funcionar.