<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">
    <title>

        <?php bloginfo('name'); ?>
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>

    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?= get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <script src="<?= get_template_directory_uri(); ?>/js/bootstrap.js"></script>

    <!--Instanciamos las cabceras de wordpress-->
    <?php wp_head(); ?>
    <style type="text/css">
        .showcase{
            background: url(<?php echo get_theme_mod('showcase_image', get_template_directory_uri().'/img/showcase.png'); ?>) no-repeat center center;
            /*lo usamos para acceder al showcase image configurado en el setting de customizer.php*/
        }

    </style>
</head>

<body>
    <div class="blog-masthead">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="main-menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                        ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <section class="showcase">
        <div class="container">
            <h1><?php echo get_theme_mod('showcase_heading', 'Plantilla Wordpress JCamiloWEb') ?></h1>
            <p><?php echo get_theme_mod('showcase_text', 'Texto demo para primera plantilla JcamiloWEb') ?></p>
            <a class="btn btn-primary btn-lg" href="<?php echo get_theme_mod('btn_url', 'https://render2web.com') ?>">
                <?php echo get_theme_mod('btn_text', 'Ver más') ?>
            </a>
        </div>
    </section>

    <section class="cajas">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php if (is_active_sidebar('caja1')): ?>
                        <?php dynamic_sidebar('caja1') ?>

                    <?php endif; ?>
                </div>

                <div class="col-md-4">
                    <?php if (is_active_sidebar('caja2')): ?>
                        <?php dynamic_sidebar('caja2') ?>

                    <?php endif; ?>
                </div>

                <div class="col-md-4">
                    <?php if (is_active_sidebar('caja3')): ?>
                        <?php dynamic_sidebar('caja3') ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="contenido">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if (have_posts()): ?>


                        <?php while (have_posts()): the_post(); ?>
                            <div class="blog-post">
                                <h2 class="blog-post-title"><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; ?>


                    <?php else : ?>
                        <p><?php __('Ninguna página encontrada') ?></p>

                    <?php endif; ?>
                </div>

                <div class="col-md-4 modulo-sidebar">
                <?php dynamic_sidebar(index: 'sidebar') ?>
                </div>

            </div>
        </div>
    </section>


    <footer class="blog-footer">
        <p>© <?php echo date('Y'); ?> - <?php bloginfo('name'); ?></p>
        <p> <?php bloginfo('description'); ?> </p>
    </footer>

    <?php wp_footer(); ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</body>

</html>