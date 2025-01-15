<?php 


function wpb_customize_register($wp_customize){

    //Con esta instrucción indicamos que aparecerá un nuevo control en: Apariencia > Personalizar
    //Compatibilidad para el Título
    $wp_customize->add_setting('showcase_heading', array(
        'default' => _x('Plantilla wordpress personalizada', 'JCamiloWEb'),
        'type' => 'theme_mod'  //Tomará el tema en el que estoy trabajando
    ));

    $wp_customize->add_control('showcase_heading', array(
        'label' => __('Título', 'JCamiloWEb'),
        'section' => 'showcase',
        'priority' => 2
    ));

    //Compatibilidad para el Texto
    $wp_customize->add_setting('showcase_text', array(
        'default' => _x('Descripción por defecto texto', 'JCamiloWEb'),
        'type' => 'theme_mod'  //Tomará el tema en el que estoy trabajando
    ));

    $wp_customize->add_control('showcase_text', array(
        'label' => __('Texto', 'JCamiloWEb'),
        'section' => 'showcase',
        'priority' => 3
    ));

    //Compatibilidad para el botón
    $wp_customize->add_setting('btn_text', array(
        'default' => _x('Ver más', 'JCamiloWEb'),
        'type' => 'theme_mod'  //Tomará el tema en el que estoy trabajando
    ));

    $wp_customize->add_control('btn_text', array(
        'label' => __('Texto botón', 'JCamiloWEb'),
        'section' => 'showcase',
        'priority' => 3
    ));

    //Control para la Url del botón
    $wp_customize->add_setting('btn_url', array(
        'default' => _x('https://render2web.con', 'JCamiloWEb'),
        'type' => 'theme_mod'  //Tomará el tema en el que estoy trabajando
    ));
 
    $wp_customize->add_control('btn_url', array(
        'label' => __('URL Botón', 'JCamiloWEb'),
        'section' => 'showcase',
        'priority' => 4
    ));


    //Comtabilidad para la imagen
    //Para añadir la sección:
    $wp_customize->add_section('showcase', array(
        'title' => __('Showcase', 'JCamiloWEb'),
        'description' => sprintf(__('Opciones de showcase', 'JCamiloWEb')),
        'priority' => 130  
    ));

    $wp_customize->add_setting('showcase_image', array(
        'default' => get_template_directory_uri().'/img/showcase.png',
        'type' => 'theme_mod'  //Tomará el tema en el que estoy trabajando
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,
        'showcase_image', array(
          'label' => __('Showcase Image', 'JCamiloWEb'),
          'section' => 'showcase',
          'setting' => 'showcase_image',
          'priority' => 1
    )));








     

}


?>