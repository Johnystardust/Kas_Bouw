<?php
/* Template Name: Home */

/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

/*
|----------------------------------------------------------------
|   Get the Header.
|----------------------------------------------------------------
*/
get_template_part('header');

/*
|----------------------------------------------------------------
|   Get the Home Page parts.
|----------------------------------------------------------------
*/
get_template_part('includes/partials/slider');
get_template_part('includes/partials/call-to-action');
get_template_part('includes/partials/services');
get_template_part('includes/partials/testimonial');
get_template_part('includes/partials/recent-projects');
get_template_part('includes/partials/call-to-action2');

/*
|----------------------------------------------------------------
|   Get the Footer.
|----------------------------------------------------------------
*/
get_template_part('footer');