<?php

//Validar si está en la administración y agregar los scripts


if (is_admin()) {

    //Agregar script de la administración

    function gvy_agregar_scripts_admin()
    {
        //Llamada a estilos admin:
        wp_enqueue_style('gvy-main-admin-style', plugins_url() . '/galeria-videos-youtube/css/estilos-admin.css');

        //Llamada a js:
        wp_enqueue_style('gvy-main-script', plugins_url() . '/galeria-videos-youtube/js/main.js');
    }

    //Cargar la función en el admin_init, cada vez que se inicie el área administración

    add_action('admin_init', 'gvy_agregar_scripts_admin');
}


//Agregar scripts para la zona fronted
function gvy_agregar_scripts()
{
    //Llamada a estilos admin:
    wp_enqueue_style('gvy-main-style', plugins_url() . '/galeria-videos-youtube/css/estilos.css');

    //Llamada a js. También cargamos el jquery
    wp_enqueue_style('gvy-main-script', plugins_url() . '/galeria-videos-youtube/js/main.js', array('jquery'));
}

//Cargar la función en el admin_init, cada vez que se inicie el área administración

add_action('admin_init', 'gvy_agregar_scripts');
