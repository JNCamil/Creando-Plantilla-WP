<?php


//Lista de vídeos

function gvy_lista_videos($atts, $content =  null)
{
    //Declaramos variable global
    global $post;


    //Atributos del shortcode
    $atts = shortcode_atts(array(
        'title' => 'Galería de vídeos',
        'count' => '20',
        'category' => 'all'

    ), $atts);


    //Verificar categoría
    if ($atts['category'] == 'all') {
        $terminos = "";
    } else {
        $terminos = array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $atts['category']

            )
        );
    }

    if($videos->have_posts()){
        $videos->the_post();

        //Obtener valores de campos
        $id_video = get_post_meta($post->ID, 'id_videos', true);
        $detalles = get_post_meta($post->ID, 'detalles', true);

        $output .= '<div class="gvy_video">';
        $output .= '<h4>.get_the_title();.</h4>';
        $output .= '<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $gvy_video_grabar_meta['id_video'][0]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';

    }
}
