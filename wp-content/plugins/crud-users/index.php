<?php
/*
Plugin Name: Crud-users-ajax
Description: ajax crud for users
Version: 1.0
Author: Juansa García
*/



function function_shortcode(){
    global $wpdb;
    $table_name="users";
    $wpdb->get_results("SELECT * FROM $table_name ",OBJECT);
    echo "<pre>";
    var_dump($wpdb);


}


add_shortcode("mi_shortcode", "function_shortcode");