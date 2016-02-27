<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Add thumbnails support.
|-----------------------------------------------------------------------------------------------------------------------
*/
add_theme_support( 'post-thumbnails' );

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Enqueue.
|-----------------------------------------------------------------------------------------------------------------------
*/
get_template_part('includes/enqueue');

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Custom Post Type.
|-----------------------------------------------------------------------------------------------------------------------
*/
get_template_part('includes/cpt');

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Register menu.
|-----------------------------------------------------------------------------------------------------------------------
*/
function tvds_register_menu_init() {
    register_nav_menu('main-menu',__( 'Hoofdmenu' ));
}
add_action( 'init', 'tvds_register_menu_init' );


/*
|-----------------------------------------------------------------------------------------------------------------------
|   Remove WYSIWYG editor from specific page.
|-----------------------------------------------------------------------------------------------------------------------
*/
add_action( 'admin_init', 'hide_editor' );

function hide_editor() {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;

    $template_file = get_post_meta($post_id, '_wp_page_template', true);

    if($template_file == 'page-home.php'){ // edit the template name
        remove_post_type_support('page', 'editor');
    }
}