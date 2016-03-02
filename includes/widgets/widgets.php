<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

/*
|----------------------------------------------------------------
|   Include all the widgets.
|----------------------------------------------------------------
*/
include_once('custom/widget-recent-projects.php');

/*
|----------------------------------------------------------------
|   Load widget function.
|
|	Register and load the widgets
|----------------------------------------------------------------
*/
function tvds_load_widget() {
    register_widget('tvds_recent_projects_widget');
}
add_action( 'widgets_init', 'tvds_load_widget' );

function tvds_add_widgets_init(){
    /*
    |----------------------------------------------------------------
    |   Contact sidebar.
    |----------------------------------------------------------------
    */
    register_sidebar(array(
        'name' 			=> __( 'Contact Sidebar', 'kas-bouw' ),
        'id' 			=> 'contact-sidebar',
        'description' 	=> __( 'Contact Sidebar', 'kas-bouw' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' 	=> '</div>',
        'before_title' 	=> '<h4>',
        'after_title' 	=> '</h4><div class="divider"><hr></div>',
    ));

    /*
    |----------------------------------------------------------------
    |   Footer.
    |----------------------------------------------------------------
    */
    register_sidebar(array(
        'name' 			=> __( 'Footer', 'kas-bouw' ),
        'id' 			=> 'footer',
        'description' 	=> __( 'Footer ruimte', 'kas-bouw' ),
        'before_widget' => '<div id="%1$s" class="%2$s col-md-3">',
        'after_widget' 	=> '</div>',
        'before_title' 	=> '<hr/><h5>',
        'after_title' 	=> '</h5><hr/>',
    ));
}
add_action( 'widgets_init', 'tvds_add_widgets_init' );