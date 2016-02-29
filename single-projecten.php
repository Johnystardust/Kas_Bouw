<?php
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

<?php
/*
|----------------------------------------------------------------
|   Single Projecten.
|----------------------------------------------------------------
*/
?>
<div id="single-projecten" class="container-fluid container-capped">
    <div class="row">
        <div class="col-md-4 single-projecten-text">
            <h1><?php echo get_field('title'); ?></span></h1>
            <div class="divider"><hr/></div>

            <?php echo get_field('text'); ?>

            <div class="project-info">
                <table>
                    <tr>
                        <td><i class="icon icon-user"></i><small>Klant:</small></td>
                        <td><?php echo get_field('customer'); ?></td>
                    </tr>
                    <tr>
                        <td><i class="icon icon-calendar"></i><small>Datum:</small></td>
                        <td><?php echo get_field('date'); ?></td>
                    </tr>
                    <tr>
                        <td><i class="icon icon-location"></i><small>Locatie:</small></td>
                        <td><?php echo get_field('location'); ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="col-md-8 no-padding single-projecten-images">
            <?php
            foreach(get_field('images') as $image){

                if($image['size']){
                    switch($image['size']){
                        case 'full' :
                            $image_size = 'col-md-12';
                        break;
                        case 'half' :
                            $image_size = 'col-md-6';
                        break;
                        case 'third' :
                            $image_size = 'col-md-4';
                        break;
                    }
                }
                ?>
                <div class="<?php echo $image_size; ?> project-image">
                    <a href="<?php echo $image['image']; ?>" class="open-lightbox">
                        <div class="project-image-inner">

                            <div class="project-image-overlay">
                                <div class="project-image-overlay-inner">
                                    <div class="middle-wrap">
                                        <i class="icon icon-search"></i>
                                    </div>
                                </div>
                                <div class="project-image-overlay-color"></div>
                            </div>

                            <img src="<?php echo $image['image']; ?>" width="100%" />
                        </div>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <?php
    $next_post              = get_next_post();
    $next_permalink         = get_permalink($next_post->ID);

    $prev_post              = get_previous_post();
    $prev_permalink         = get_permalink($prev_post->ID);

    $previous_adjacent_post = get_adjacent_post(true, '', true);
    $next_adjacent_post     = get_adjacent_post(true, '', false);
    ?>

    <div class="row posts-nav">
        <div class="col-md-2 previous-post-link">
            <?php
            if($previous_adjacent_post){
                echo '<a href="'.$prev_permalink.'"><i class="icon icon-left-open"></i>Vorige</a>';
            }
            ?>
        </div>

        <div class="col-md-2 col-md-offset-8 next-post-link">
            <?php
            if($next_adjacent_post){
                echo '<a href="'.$next_permalink.'">Volgende<i class="icon icon-right-open"></i></a>';
            }
            ?>
        </div>
    </div>

</div>

<?php
/*
|----------------------------------------------------------------
|   Lightbox.
|----------------------------------------------------------------
*/
?>
<div id="lightbox">
    <div class="lightbox-inner">
        <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/project-single-2.jpg'; ?>" height="100%" />
    </div>
</div>

<?php
/*
|----------------------------------------------------------------
|   Get the Footer.
|----------------------------------------------------------------
*/
get_template_part('footer');
