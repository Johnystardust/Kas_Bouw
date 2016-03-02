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

get_template_part('includes/partials/slider');
?>

<div id="home-layout">
    <!-- Call To Action-->
    <div id="call-to-action" class="container-fluid container-capped">
        <h5><?php the_field('call_to_action_text'); ?></h5>
        <a class="button" href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a>
    </div><!-- Call to Action closing tag -->

    <!-- Services Container -->
    <div id="services-container" class="container-fluid container-capped">
        <div class="row services-row">

            <div class="title">
                <h1><?php the_field('services_title'); ?></h1>
                <div class="divider"><hr/></div>
            </div>

            <?php
            $i = 0;

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
                        echo '<div class="row no-margin">';
                    }
                    ?>
                    <div class="col-md-6 service">
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
        </div><!-- Services Row closing tag -->
    </div><!-- Services Container closing tag -->

    <!-- Testimonial Container -->
    <div id="testimonial-container" class="container-fluid container-capped">
        <div class="title">
            <h1><?php the_field('testimonials_title'); ?></h1>
            <div class="divider"><hr/></div>
        </div>

        <div class="row testimonial-row">
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
        </div><!-- Testimonial Row closing tag -->
    </div><!-- Testimonial Container closing tag -->

    <!-- Recent Projects Container-->
    <div id="recent-projects-container" class="container-fluid container-capped">
        <div class="title">
            <h1>Recente projecten</h1>
            <div class="divider"><hr/></div>
        </div>

        <div class="row recent-projects-row">
            <?php
            $x = 0;

            /*
            |----------------------------------------------------------------
            |   WP_Query.
            |----------------------------------------------------------------
            */
            $args = array(
                'post_type'         => 'projecten',
                'posts_per_page'    => 3,
            );

            $the_query = new WP_Query($args);

            /*
            |----------------------------------------------------------------
            |   If there are posts display them.
            |----------------------------------------------------------------
            */
            if($the_query->have_posts()) {
                while ($the_query->have_posts()): $the_query->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="col-md-4 project">
                            <div class="project-inner">

                                <div class="project-overlay">

                                    <div class="project-overlay-inner">
                                        <div class="middle-wrap">
                                            <h3><?php the_title(); ?></h3>
                                            <div class="divider"><hr/></div>
                                            <div class="category">
                                                <?php
                                                $categories = get_the_category();

                                                foreach($categories as $category){
                                                    echo '<span>'.esc_html($category->name).'</span>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="project-overlay-color"></div>

                                </div>
                                <?php if(has_post_thumbnail()){
                                    the_post_thumbnail();
                                }
                                ?>
                            </div>
                        </div>
                    </a>
                <?php
                $x++;
                endwhile;
            }

            /*
            |----------------------------------------------------------------
            |   If there aren't any posts display a warning.
            |----------------------------------------------------------------
            */
            else {
                echo 'There are no posts to display';
            }

            /*
            |----------------------------------------------------------------
            |   Reset the post data.
            |----------------------------------------------------------------
            */
            wp_reset_postdata();
            ?>
        </div><!-- Recent Projects Row closing tag -->

        <?php
        /*
        |----------------------------------------------------------------
        |   If there are 3 posts displayed show the all projects button.
        |----------------------------------------------------------------
        */
        if($x == 3){
            echo '<div class="link-to-projects"><a href="'.home_url().'/projecten/" class="button">Alle Projecten</a></div>';
        }
        ?>

    </div><!-- Recent Projects Container closing tag -->

    <!-- Call To Action-->
    <div id="call-to-action" class="container-fluid container-capped">
        <h5><?php the_field('call_to_action_2_text'); ?></h5>
        <a class="button" href="<?php the_field('button_2_link'); ?>"><?php the_field('button_2_text'); ?></a>
    </div><!-- Call to Action closing tag -->

</div><!-- Home Layout closing tag -->

<?php
/*
|----------------------------------------------------------------
|   Get the Footer.
|----------------------------------------------------------------
*/
get_template_part('footer');