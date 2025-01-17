<?php 

/*
Plugin Name: Galería de vídeos Youtube
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Plugin para crear una galería de vídeos de youtube
Version: 1.0
Author: JCamiloWEb
Author URI: http://health-check-team.example.com
Text Domain: JCamilWEb
Domain Path: /languages
License: GPL2
*/


//Si se accede directamente al archivo mediante la URL
if(!defined('ABSPATH')){
    exit;
}


//Cargar scripts 
require_once(plugin_dir_path(__FILE__) . '/includes/galeria-videos-youtube-scripts.php');
//Cargar shortcodes
require_once(plugin_dir_path(__FILE__) . '/includes/galeria-videos-youtube-shortcodes.php');


if(is_admin()){

    //ZONA ADMIN: CARGAR
    require_once(plugin_dir_path(__FILE__) . '/includes/galeria-videos-youtube-fpp.php');
    //Cargar campos
    require_once(plugin_dir_path(__FILE__) . '/includes/galeria-videos-youtube-campos.php');

}








?>