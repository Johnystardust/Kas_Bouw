<?php
/* Template Name: Contact */

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

get_template_part('includes/partials/slider');
?>

<div id="contact" class="container-fluid container-capped">

    <div class="title">
        <h1>Contact</h1>
        <div class="divider"><hr/></div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-9">
            <div class="content">
                <h4><?php the_field('title'); ?></h4>
                <div class="divider"><hr/></div>
                <?php the_field('text'); ?>
            </div>

            <div class="form">
                <?php echo do_shortcode('[contact-form-7 id="97" title="Contact form 1"]'); ?>
            </div>

        </div>

        <div class="col-lg-4 col-md-3 sidebar">
            <?php dynamic_sidebar('contact-sidebar'); ?>
        </div>
    </div><!-- Row closing tag -->

</div><!-- Contact closing tag -->

<?php
/*
|----------------------------------------------------------------
|   Get the Footer.
|----------------------------------------------------------------
*/
get_template_part('footer');