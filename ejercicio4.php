<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Variables de sesión - Crear, Modificar, Borrar y Destruir

session_start();
$_SESSION["user"]="admin";

session_unset();
echo "Se borraron las sesiones registradas";
session_destroy();
echo "Se destruyó la sesión user";
session_write_close(); // Guarda la información de la sesión anterior pero no devuelve ningún valor.

?>