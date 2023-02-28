# Prueba técnica PHP de Sebastian Henao - Konecta

Prueba técnica realizada en PHP nativo, con conexión PDO a base de datos MySQL, interfaz sin uso de plantillas, diseñada 100% desde 0 con HTML5 y CSS3, interactividad añadida con Vanilla JS. La librería de estilos `devtian.css` ha sido creada por mi.

## Instalación y acceso

No es necesario realizar ninguna instalación para su correcto funcionamiento, para acceder al aplicativo basta con ingresar un correo cualquiera en el formato correcto, por ejemplo *nombre@mail.com* y contraseña cualquier cadena, por ejemplo *123*.

## Cómo se hizo

Consta de una estructura tipo sitio web, con `index.php` para el login, `panel.php` como dashboard, `inventario.php` vista de productos y `ventas.php` para vista de las ventas. 

La estructura del proyecto está en la carpeta `php`, donde se encontrarán 3 carpetas *api*, *class* y *config*, en la primera de ella están los llamados a los métodos de CRUD de cada uno de los módulos, estos están totalmente terminados y funcionales probados con POSTMAN, en la segunda carpeta están las clases de cada modelo con sus funciones para el CRUD y en la última carpeta está la configuración a la base de datos. Mi base de datos tiene como contraseña "password", reemplazar la línea 7 del archivo `db.php` en caso de tener otra contraseña.

## Desafíos

Elaborar una interfaz intuitiva, amigable en poco tiempo, retornar a PHP Nativo al usar Frameworks para agilizar el trabajo. El proyecto a nivel de lógica de negocio está terminado, faltó realizar la conexión del *update* y *delete* en los módulos.

## Desarrollado por

Gracias por considerar mi perfil, expectante de poder hacer parte del equipo Konecta.
- Sebastian Henao Posada.
