<?php
// Incluir el archivo de configuración de WordPress para acceder a las funciones de WordPress
require_once( dirname( __FILE__ ) . '/wp-load.php' );

// Verificar si la solicitud es una solicitud AJAX
if ( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && strtolower( $_SERVER['HTTP_X_REQUESTED_WITH'] ) === 'xmlhttprequest' ) {
    // Conexión a la base de datos de WordPress
    global $wpdb;

    // Realizar la consulta a la base de datos para obtener los usuarios
    $usuarios = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}users");

    // Verificar si se encontraron usuarios
    if ( $usuarios ) {
        // Devolver los usuarios como respuesta en formato JSON
        echo json_encode( $usuarios );
    } else {
        // Si no se encontraron usuarios, devolver un mensaje de error
        echo json_encode( array( 'error' => 'No se encontraron usuarios.' ) );
    }

    // Importante: detener la ejecución de PHP después de enviar la respuesta JSON
    exit;
} else {
    // Si la solicitud no es una solicitud AJAX, mostrar un mensaje de error
    echo 'Acceso denegado.';
}