# Prueba técnica Laravel v11 -> Gestor de tareas

Desarrollada por Andres David Suarez Quiñones

## Pasos para recrear en local el proyecto (XAMPP):

-   Descargar el repositorio dentro de la carpeta htdocs de XAMPP
-   Renombrar el archivo .env.example a .env (para tener los datos de la conexión con la base de datos)
-   Iniciar el módulo Apache y MySQL en el panel de control de XAMPP
-   Abrir el navegador e ingresar la url: http://localhost/phpmyadmin/
-   en la interfaz de phpmyadmin crear una nueva base de datos con el nombre: task_manager_db
-   Abrir la carpeta del proyecto en Visual Studio Code
-   Abrir la terminal (linea de comandos) y ejecutar el comando:
    ```
    php artisan migrate
    ```
-   En la terminal levantar el servidor con el comando:
    ```
    php -S localhost:8000 -t public/
    ```
-   Abrir en el navegador la url http://localhost:8000/
-   Utilizar el formulario para Crear tareas y posteriormente puede usar el botón ❌ para eliminar la tarea de la base de datos

###Objetivo esperado:
Se espera que el usuario pueda visualizar una interfáz como se muestra a continuación:
![image](https://github.com/Adsuarez/laravel-task-manager/assets/26845524/669f5f84-d204-4062-90f7-41cb09aba47e)

###Objetivos futuros:
- Agregar validaciones a los campos de fecha, para que no se pueda ingresar una fecha anterior al momento de la creación de la tarea.
- Mejorar los estilos para que cada campo corresponda con su título en la tabla.
- Agregar la funcionalidad para modificar el título, la descripción, la fecha de vencimiento o el estado de la tarea.
- Implementar tests para garantizar el correcto funcionamiento del proyecto.
