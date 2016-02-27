<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

$i = 0;

?>
<div id="services" class="container-fluid container-capped">

    <div class="title">
        <h1><?php the_field('services_title'); ?></h1>
        <div class="divider"><hr/></div>
    </div>

    <?php
    /*
    |----------------------------------------------------------------
    |   If the services have rows.
    |----------------------------------------------------------------
    */
    if(have_rows('services')){
        while(have_rows('services')) : the_row();
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $text  = get_sub_field('text');

            /*
            |----------------------------------------------------------------
            |   Place opening row div.
            |----------------------------------------------------------------
            */
            if($i%2==0){
                echo '<div class="row">';
            }
            ?>
            <div class="col-md-6 service">
                <div class="thumb"><img src="<?php echo $image; ?>"/></div>
                <div class="content">
                    <h4><?php echo $title; ?></h4>
                    <div class="divider"><hr/></div>
                    <p><?php echo $text; ?></p>
                </div>
            </div>
            <?php
            $i++;

            /*
            |----------------------------------------------------------------
            |   Place closing row div.
            |----------------------------------------------------------------
            */
            if($i%2==0){
                echo '</div>';
            }
        endwhile;

        /*
        |----------------------------------------------------------------
        |   Place closing row div if the loop is over and the row isn't
        |   closed.
        |----------------------------------------------------------------
        */
        if($i%2!=0){
            echo '</div>';
        }
    }
    ?>

</div>