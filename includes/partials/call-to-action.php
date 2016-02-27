<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */

?>
<div id="call-to-action" class="container-fluid container-capped">
    <h5><?php the_field('call_to_action_text'); ?></h5>
    <a class="button" href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a>
</div>