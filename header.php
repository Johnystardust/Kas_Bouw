<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <title>
        Kas Bouw |
        <?php
        if(is_archive()){
            if(get_post_type() == 'projecten'){echo 'Projecten';}
        }
        else {
            the_title();
        }
        ?>
    </title>

    <!-- Enqueue all the styles & scripts -->
    <?php wp_head(); ?>

    <link href='https://fonts.googleapis.com/css?family=Raleway:800,700,500,400,600,600italic,400italic' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Preloader -->
    <?php get_template_part('includes/partials/preloader'); ?>

    <!-- Preloader -->
    <?php get_template_part('includes/partials/go-to-top'); ?>


    <nav id="main-nav" class="container-fluid container-capped">

        <div class="nav-logo">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/kasbouw-logo.png'; ?>"/> </a>
        </div>

        <div class="nav-menu">
            <div class="menu-icon-wrapper">
                <div class="menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <?php
            $args = array(
                'theme_location'  => 'main-menu',
                'menu'            => '',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu-container',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
            );

            wp_nav_menu($args);
            ?>
        </div>


    </nav>