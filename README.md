# AcademVIT

AcademVIT es un sistema de gestión escolar/académica. Esta versión ha sido modernizada exhaustivamente para ofrecer la mejor experiencia tanto a nivel de código como de interfaz de usuario. Actualmente funciona sobre:
- **Laravel 9**
- **PHP 8.2**
- **Tailwind CSS** (Reemplazando Bootstrap 4)
- **Vite** (Reemplazando Laravel Mix)
- **Alpine.js** y **Vue 3**

## Requisitos del Servidor
Para instalar y correr este proyecto de forma local, asegúrate de tener:
- PHP >= 8.0.2 (Recomendado 8.2)
- Composer
- Node.js (Recomendado >= 18.x) y NPM
- MySQL / MariaDB (por ejemplo, mediante XAMPP)

## Instalación Paso a Paso

1. **Clonar el Repositorio**
   ```bash
   git clone https://github.com/eizy-c/AcademVIT.git
   cd AcademVIT
   ```

2. **Instalar Dependencias de Backend (PHP)**
   ```bash
   composer install
   ```

3. **Configurar el Entorno**
   Copia el archivo de ejemplo para crear tu configuración local:
   ```bash
   cp .env.example .env
   ```
   *(En Windows puedes usar `copy .env.example .env` o hacerlo manualmente).*

4. **Generar la Clave de Aplicación**
   ```bash
   php artisan key:generate
   ```

5. **Configurar la Base de Datos**
   Abre el archivo `.env` que acabas de crear y configura las credenciales de tu base de datos MySQL local:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=acadenvit_bd
   DB_USERNAME=root
   DB_PASSWORD=
   ```
   *Asegúrate de crear previamente una base de datos vacía llamada `acadenvit_bd` en tu phpMyAdmin o gestor de base de datos preferido.*

6. **Ejecutar Migraciones y Datos Iniciales (Seeders)**
   Esto creará todas las tablas necesarias y registrará los datos por defecto (como el usuario administrador).
   ```bash
   php artisan migrate:fresh --seed
   ```

7. **Instalar Dependencias de Frontend (Node.js)**
   ```bash
   npm install
   ```

8. **Compilar Activos y Levantar Servidor**
   Para desarrollo local, compila los assets una vez y levanta el servidor PHP:

   ```bash
   npm run build
   php artisan serve
   ```
   *Nota: Si vas a modificar archivos CSS o JS, usa `npm run dev` en una terminal separada.*

9. **Acceder a la Aplicación**
   Abre tu navegador web y visita: [http://localhost:8000](http://localhost:8000)

## Credenciales por Defecto
Una vez instalado y tras correr el seeder, puedes iniciar sesión en el panel con:
- **Email:** `admin@mail.com`
- **Contraseña:** `admin`
