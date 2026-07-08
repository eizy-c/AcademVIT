# AcademVIT

AcademVIT es un sistema de gestión escolar/académica. Esta versión ha sido modernizada para funcionar sobre **Laravel 8**, **PHP 8**, **Vue 3**, **Vite** y **Tailwind CSS**.

## Requisitos del Servidor
Para instalar y correr este proyecto de forma local, asegúrate de tener:
- PHP >= 8.0 (Recomendado 8.2)
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
   php artisan migrate --seed
   ```

7. **Instalar Dependencias de Frontend (Node.js)**
   ```bash
   npm install
   ```

8. **Levantar los Servidores de Desarrollo**
   Para poder ver la aplicación completa con sus estilos recargando en tiempo real, necesitas abrir **dos terminales** diferentes en la carpeta del proyecto.

   **Terminal 1 (Backend de Laravel):**
   ```bash
   php artisan serve
   ```

   **Terminal 2 (Frontend Vite):**
   ```bash
   npm run dev
   ```

9. **Acceder a la Aplicación**
   Abre tu navegador web y visita: [http://localhost:8000](http://localhost:8000)

## Credenciales por Defecto
Una vez instalado y tras correr el seeder, puedes iniciar sesión con:
- **Email:** `admin@admin.com`
- **Contraseña:** `password`
