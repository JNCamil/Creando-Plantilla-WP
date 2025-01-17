<?php 
//Crear formato de post personalizado
function gvy_registrar_video(){
    $singular_name = apply_filters('gvy_label_singular', 'Video');
    $plural_name = apply_filters('gvy_label_plural', 'Videos');

    //LABELS
    $labels = array(
        'name' => $plural_name,
        'singular_name' => $singular_name,
        'add_new' => 'Agregar nuevo', //Añadir nuevo elemento
        'add_new_item' => 'Agregar nuevo ' . $singular_name,
        'edit' => 'Editar',
        'edit_item' => 'Editar ' . $singular_name,
        'new_item' => 'Nuevo ' . $singular_name,
        'view' => 'Ver',
        'view_item' => 'Ver ' . $singular_name,
        'search_items' => 'Buscar ' . $plural_name, //Buscar vídeos
        'not_found' => 'Ningun ' . $plural_name . ' Encontrado',
        'not_foung_in_trash' => 'Ningun ' . $plural_name . ' en Papelera',
        'menu_name' => $plural_name
    );


    //ARGUMENTOS
    $args = apply_filters('gvy_video_args', array(

        'labels' => $labels,
        'description' => 'Vídeos por categoría',
        'taxonomies' => array('Category'), 
        'public' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-video-alt',
        'show_in_nav_menus' => true,
        'capability_type' => 'post', //Tipo de post
        'supports' => array('title')
    ));
    //Registrar tipo de post de vídeo
    register_post_type('video', $args); //Tipo de pos vídeo
}
//Cargar action
add_action('init', 'gvy_registrar_video');


?>