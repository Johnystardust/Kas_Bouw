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
?>

<div id="slider" class="container-fluid no-padding">

    <div class="slide-overlay container-capped">

        <div class="middle-wrap">
            <h1>A <span style="color: #f6a500;">RELIABLE</span> TEAM</h1>
            <h4>
                Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.<br/>
                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
            </h4>
            <small>- Robert Johnson</small>
        </div>

    </div>

    <div class="image-darken"></div>
    <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/sliderimage.png'; ?>" width="100%"/>
</div>

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