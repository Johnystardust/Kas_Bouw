<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

?>
<div id="testimonial" class="container-fluid container-capped">

    <div class="title">
        <h1><?php the_field('testimonials_title'); ?></h1>
        <div class="divider"><hr/></div>
    </div>

    <?php
        if(have_rows('testimonial')){
            while(have_rows('testimonial')) : the_row();
                $text       = get_sub_field('text');
                $author     = get_sub_field('author');
                $function   = get_sub_field('function');

                ?>
                <div class="col-md-6 testimonial-item">
                    <div class="testimonial-item-inner">
                        <div class="quote-img"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/quote-image.png'; ?>" /></div>
                        <p>
                            <?php echo $text; ?>
                            <br/><br/>
                            <small class="author"><?php echo $author; ?></small><br/>
                            <small class="company"><?php echo $function; ?></small>
                        </p>
                    </div>
                </div>
                <?php
            endwhile;
        }
    ?>

</div>