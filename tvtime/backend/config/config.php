<?php   

//agregamos las rutas principales

//define('RUTA_BACKEND','https://app.tvtime.com/backend/');
//define('RUTA_FRONTEND','https://app.tvtime.com/');

//obtenemos dinamicamente el dominio del servidor
define('RUTA_FRONTEND','//'.$_SERVER['SERVER_NAME'].'/');
define('RUTA_BACKEND', '//'.$_SERVER['SERVER_NAME'].'/backend/');

define('DB_HOST', 'localhost');
define('DB_SCHEMA', 'tvtime');
define('DB_USER','root');
define('DB_PASSWORD', '');
define('DB_ENCONDING', 'SET NAMES utf8');

?>