### INSTALACIÓN INICIAL DEL PROYECTO

🛠️ Requisitos previos

Instalar XAMPP
    Descarga e instala XAMPP desde su página oficial.
    Configura el servidor local para asegurarte de que los servicios de Apache y MySQL están activos.

Instalar Composer
    Descarga e instala Composer desde su página oficial.
    Asegúrate de agregar Composer al Path del sistema durante la instalación (opción habilitada por defecto).

Instalar Node.js
    Descarga e instala Node.js desde la página oficial de Node.js.

🛠️ Configuración en Windows (si se presenta un error de política de ejecución)
Si al ejecutar comandos encuentras un error relacionado con la política de ejecución, sigue estos pasos:

Abre PowerShell como administrador.
    Ejecuta el siguiente comando para modificar temporalmente la política de ejecución:
    Set-ExecutionPolicy -Scope Process -ExecutionPolicy Bypass

📦 Instalación del Proyecto
Instalar dependencias con npm
Ejecuta el siguiente comando para instalar las dependencias del proyecto, ignorando conflictos de versiones:
    npm install --legacy-peer-deps


Instalar dependencias de Composer
Si el proyecto incluye dependencias PHP gestionadas con Composer, ejecuta:
    composer install
