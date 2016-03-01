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

        if(have_rows('slider')){
            while(have_rows('slider')) : the_row();
                ?>
                <li class="slide" style="background-image: url(<?php the_sub_field('image'); ?>)">

                    <div class="slide-overlay container-capped">

                        <div class="middle-wrap">
                            <h1><?php the_sub_field('title'); ?></h1>
                            <?php the_sub_field('text'); ?>
                        </div>

                    </div>

                    <div class="image-darken"></div>
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