<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

?>
<div id="slider" class="container-fluid no-padding">

    <div class="slide-overlay container-capped">

        <div class="middle-wrap">
            <h1><?php the_field('header_title'); ?></h1>
            <h4><?php the_field('header_text'); ?></h4>
            <small><?php the_field('header_subline'); ?></small>
        </div>

    </div>

    <div class="image-darken"></div>
    <img src="<?php the_field('header_image'); ?>" width="100%"/>
</div>