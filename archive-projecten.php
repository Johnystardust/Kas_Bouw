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

get_template_part('includes/partials/slider');
?>
<div id="projects" class="container-fluid container-capped">
    <div class="title">
        <h1>Projecten</h1>
        <div class="divider"><hr/></div>
    </div>

    <div class="row">
    <?php
    /*
    |----------------------------------------------------------------
    |   WP_Query.
    |----------------------------------------------------------------
    */
    $i = 0;

    $args = array(
        'post_type'         => 'projecten',
        'posts_per_page'    => '',
    );

    $the_query = new WP_Query($args);

    /*
    |----------------------------------------------------------------
    |   If there are posts display them.
    |----------------------------------------------------------------
    */
    if($the_query->have_posts()) {
        while ($the_query->have_posts()): $the_query->the_post();

            /*
            |----------------------------------------------------------------
            |   Place opening row div.
            |----------------------------------------------------------------
            */
//            if($i%3==0){
//                echo '<div class="row">';
//            }
//            ?>
            <a href="<?php the_permalink(); ?>">
                <div class="col-md-4 col-sm-6 col-xs-12 project">
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

                        <div class="mobile-description">
                            <h4><?php the_title(); ?></h4>
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
                </div>
            </a>
            <?php
            $i++;

            /*
            |----------------------------------------------------------------
            |   Place closing row div.
            |----------------------------------------------------------------
            */
//            if($i%3==0){
//                echo '</div>';
//            }
        endwhile;

        /*
        |----------------------------------------------------------------
        |   Place closing row div if the loop is over and the row isn't
        |   closed.
        |----------------------------------------------------------------
        */
//        if($i%3!=0){
//            echo '</div>';
//        }
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
    </div><!-- Row closing tag -->
</div><!-- Projects closing tag -->
<?php
/*
|----------------------------------------------------------------
|   Get the Footer.
|----------------------------------------------------------------
*/
get_template_part('footer');
wp_footer();
