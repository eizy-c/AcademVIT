# ACADEMVIT
## Como utilizarlos

Para poder utilizar este proyecto, debes tener los siguientes requisitos:

1. Debes tener la versión de PHP mayor o igual a la **7.2.5**
para mas información visita la documentación oficial de Laravel: https://laravel.com/docs/7.x

2. Debes tener instalado composer en tu equipo: https://getcomposer.org/

3. Si utilizas windows, puedes descargar el programa git desde la página oficial: https://gitforwindows.org/

**Si cumples con estos prerequisitos, entonces podrás instalar este proyecto.**

**Pasos para instalar este proyecto correctamente:

4. Descarga este proyecto o clónalo con el comando: 

<pre>git clone git://github.com/EizagaYC/AcademVIT.git</pre>

5. Ejecutar el comando: 

<pre>$ composer install </pre>

(esto es para descargar las dependencias de php)

6. Copiar el archivo ".env.example" y pegarlo con el nombre: ".env". Si estas con el sistema gitforwindows, o en linux o mac, puedes ejecutar el siguiente comando: 

<pre>cp .env.example .env</pre>

7. Debemos generar una nueva llave de laravel con el siguiente comando:

<pre>$ php artisan key:generate</pre>

8. Configura la nueva base de datos modificando el archivo ".env":

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=permisos_bd
- DB_USERNAME=root
- DB_PASSWORD=

9. Ejecuta 

<pre>$ php artisan migrate --seed</pre>

*(para migrar las tablas en la base de datos y insertar las seeder)

10. ejecuta <pre>$ npm install && npm run dev</pre>

(esto es para descargar las dependencias de javascript y compilar los archivos js)

11. Finalmente ejecuta este comando 

<pre>$  php artisan serve </pre>

y prueba el proyecto que debe funcionar.
