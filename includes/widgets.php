<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

function tvds_add_widgets_init(){
    /*
    |----------------------------------------------------------------
    |   Footer widget.
    |----------------------------------------------------------------
    */
    register_sidebar(array(
        'name' 			=> __( 'Contact Sidebar', 'kas-bouw' ),
        'id' 			=> 'contact-sidebar',
        'description' 	=> __( 'Footer ruimte', 'media-critics' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' 	=> '</div>',
        'before_title' 	=> '<h4>',
        'after_title' 	=> '</h4><div class="divider"><hr></div>',
    ));
}
add_action( 'widgets_init', 'tvds_add_widgets_init' );