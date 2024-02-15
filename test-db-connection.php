<?php

// Incluye el archivo wp-config.php para obtener acceso a las constantes de la base de datos de WordPress
require_once('wp-config.php');

// Intenta conectarte a la base de datos usando las constantes definidas en wp-config.php
$conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Verifica si hay algún error de conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa a la base de datos!";
}

// Cierra la conexión
$conexion->close();

?>