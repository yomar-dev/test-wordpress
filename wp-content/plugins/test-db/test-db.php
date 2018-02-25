<?php
/**
* Plugin Name: Test DB
* Plugin URI: https://github.com/yomar-dev/test-wordpress
* Description: Este plugin crea una tabla en la BD de wordpress
* Version: 1.0.0
* Author: Yomar Miranda
* Author URI: https://yomar-dev.github.io/
* License: GPL2
*/


/*
* @description Hook que se ejecuta al activar el plugin
*/
register_activation_hook( __FILE__, 'create_table' );
 
/*
* @description Función que crea las tabla al momento de activar el plugin
*/
function create_table(){

	//Obtenemos el objeto $wpdb
    global $wpdb;
 
    //El nombre de la tabla, utilizamos el prefijo de wordpress
    $table_name = $wpdb->prefix . 'data_storage';
 
    //sql con el statement de la tabla
    $sql = "CREATE TABLE $table_name (
      id INTEGER UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
      nombre VARCHAR(255) NOT NULL,
      email VARCHAR(100) NOT NULL,
      telefono VARCHAR(20) NOT NULL,
      ciudad VARCHAR(30),
      empresa VARCHAR(100),
      fecha DATETIME DEFAULT NOW(),
      ip VARCHAR(15) NOT NULL,
      url TEXT NOT NULL
    );";
 
 //upgrade contiene la función dbDelta la cuál revisará si existe la tabla o no
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
 
    //creamos la tabla
    dbDelta($sql);
}