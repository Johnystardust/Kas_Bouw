<?php
/* Template Name: About us */

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

<div id="about-us" class="container-fluid container-capped">

    <div class="row row-about">

        <div class="title">
            <h1><?php the_field('about_us_title'); ?></h1>
            <div class="divider"><hr/></div>
        </div>

        <?php
        $i = 0;

        /*
        |----------------------------------------------------------------
        |   If have rows.
        |----------------------------------------------------------------
        */
        if(have_rows('about_us')){
            while(have_rows('about_us')) : the_row();
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $text  = get_sub_field('text');

                /*
                |----------------------------------------------------------------
                |   Place opening row div.
                |----------------------------------------------------------------
                */
                if($i%2==0){
                    echo '<div class="row no-margin">';
                }
                ?>
                <div class="col-md-6">
                    <div class="thumb"><img src="<?php echo $image; ?>"/></div>
                    <div class="content">
                        <h4><?php echo $title; ?></h4>
                        <div class="divider"><hr/></div>
                        <?php echo $text; ?>
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
    </div><!-- Row About closing tag -->

    <div class="row row-services">

        <div class="title">
            <h1><?php the_field('our_services_title'); ?></h1>
            <div class="divider"><hr/></div>
        </div>

        <div class="col-md-12 services">
            <div class="services-inner">
                <?php

                if(get_field('services')){
                    $title_array = array();
                    $explanation_array = array();

                    foreach(get_field('services') as $service){
                        array_push($title_array, $service['service_title']);
                        array_push($explanation_array, $service['service_explanation']);
                    }
                }
                ?>

                <div class="col-md-4 col-sm-12 services-nav">
                    <ul>
                        <?php
                        $o = 0;

                        if(!empty($title_array)){
                            foreach($title_array as $title){
                                echo '<li><a class="services-nav-item '.($o == 0 ? 'active' : '').'" href="#" data-index="'.$o.'">'.$title.'</a></li>';
                                $o++;
                            }
                        }
                        ?>
                    </ul>
                </div>

                <div class="col-md-8 col-sm-12 services-text">
                    <?php
                    $p = 0;

                    if(!empty($explanation_array)){
                        foreach($explanation_array as $explanation){
                            echo '<div class="service-text '.($p == 0 ? 'active' : '').'" data-index="'.$p.'">'.$explanation.'</div>';
                            $p++;
                        }
                    }
                    ?>
                </div>

            </div>
        </div>

    </div>

</div>

<?php
/*
|----------------------------------------------------------------
|   Get the Footer.
|----------------------------------------------------------------
*/
get_template_part('footer');