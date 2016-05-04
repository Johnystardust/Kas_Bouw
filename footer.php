<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */
?>
<footer class="container-fluid container-capped">
    <div class="row">
        <?php dynamic_sidebar('footer'); ?>

        <div class="col-md-3">
            <hr/>
            <h5>Contact gegevens</h5>
            <hr/>

            <ul>
                <li><?php echo get_theme_mod('street'); ?></li>
                <li><?php echo get_theme_mod('postal'); ?></li>
                <li><a href="tel:+06 247 325 87"></a><?php echo get_theme_mod('phone'); ?></li>
                <li><a href="mailto:<?php echo get_theme_mod('e_mail'); ?>"><?php echo get_theme_mod('e_mail'); ?></a></li>
            </ul>
        </div>

        <span class="col-md-12 copyright">&copy; 2016 - Kas Bouw | Ontwikkeld door <a href="http://www.media-critics.nl" target="_blank">Media Critics</a></span>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>