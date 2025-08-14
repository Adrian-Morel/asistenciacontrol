# Proyecto de Asistencia

Este proyecto es una aplicación web diseñada para gestionar la asistencia de usuarios mediante diferentes métodos, incluyendo QR, reconocimiento facial e identificación.

## Estructura del Proyecto

El proyecto está organizado de la siguiente manera:

- **public/**: Contiene el archivo `index.php`, que es el punto de entrada de la aplicación.
- **src/**: Contiene la lógica del negocio y las vistas.
  - **controllers/**: Aquí se encuentra `AsistenciaController.php`, que maneja la lógica de las opciones de asistencia.
  - **views/**: Contiene las vistas de la aplicación, incluyendo el encabezado, pie de página y las opciones de asistencia.
  - **models/**: Contiene el modelo `Usuario.php`, que representa a un usuario en el sistema.
- **assets/**: Contiene los archivos estáticos como CSS y JavaScript.
  - **css/**: Aquí se encuentra `estilos.css`, que contiene estilos personalizados.
  - **js/**: Aquí se encuentra `main.js`, que contiene scripts de JavaScript para la funcionalidad del lado del cliente.
- **composer.json**: Archivo de configuración para Composer, que gestiona las dependencias del proyecto.

## Instalación

1. Clona el repositorio en tu máquina local.
2. Navega al directorio del proyecto.
3. Ejecuta `composer install` para instalar las dependencias necesarias.
4. Configura tu servidor web para apuntar al directorio `public/`.

## Uso

Accede a la aplicación a través de tu navegador en la dirección configurada. Desde la página principal, podrás elegir entre las diferentes opciones para marcar asistencia.

## Contribuciones

Las contribuciones son bienvenidas. Si deseas colaborar, por favor abre un issue o envía un pull request.

## Licencia

Este proyecto está bajo la Licencia MIT.