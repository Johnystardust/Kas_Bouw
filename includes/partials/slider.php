<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

?>
<div id="slider" class="container-fluid no-padding">
    <ul class="slide-container">
        <?php
        $i = 0;

        if(have_rows('slider', 'option')){
            while(have_rows('slider', 'option')) : the_row();
                ?>
                <li class="slide" style="background-image: url(<?php the_sub_field('image'); ?>)">

                    <div class="slide-overlay container-capped">

                        <div class="middle-wrap">
                            <h1><?php the_sub_field('title', 'option'); ?></h1>
                            <h4><?php echo get_sub_field('text', 'option'); ?></h4>

                            <?php
                            if(get_sub_field('link_url', 'option')){
                                echo '<a class="button" href="'.get_sub_field('link_url', 'option').'">'.get_sub_field('link_name', 'option').'</a>';
                            }
                            ?>
                        </div>

                    </div>

                    <?php
                    if(get_sub_field('overlay_active', 'option')){
                        $overlay_color      = get_sub_field('overlay_color', 'option');
                        $overlay_opacity    = get_sub_field('overlay_opacity', 'option') / 100;

                        echo '<div class="image-darken" style="background-color: '.$overlay_color.'; opacity: '.$overlay_opacity.'"></div>';
                    }
                    ?>
                </li>
                <?php
                $i++;
            endwhile;
        }
        ?>
    </ul>

    <?php
    if($i > 1){

        // Calculate the menu width
        $menu_width = $i * 20;

        ?>
        <div class="slider-nav">
            <ul style="width: <?php echo $menu_width; ?>px;">
                <?php
                /*
                |----------------------------------------------------------------
                |   Foreach slide render a dot.
                |----------------------------------------------------------------
                */
                for ($x = 0; $x <= ($i - 1); $x++) {
                    /*
                    |----------------------------------------------------------------
                    |   If $x == 0 render the active dot.
                    |----------------------------------------------------------------
                    */
                    if($x == 0){
                        echo '<li class="active" data-slide-number="'.$x.'"><i class="icon-circle"></i></li>';
                    }
                    else {
                        echo '<li data-slide-number="'.$x.'"><i class="icon-circle-empty"></i></li>';
                    }
                }
                ?>
            </ul>
        </div>
        <?php
    }
    ?>

</div>