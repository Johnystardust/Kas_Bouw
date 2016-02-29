<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

?>
<div id="recent-projects" class="container-fluid container-capped">

    <div class="title">
        <h1>Recente projecten</h1>
        <div class="divider"><hr/></div>
    </div>

    <div class="row">
        <?php
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
    </div>

</div>