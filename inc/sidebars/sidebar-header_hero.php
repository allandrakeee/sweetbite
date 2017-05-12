<?php
/**
 * Header hero sidebar setup.
 *
 * @package sweetbite
 * @author Solomon Culaste
 */

if(is_active_sidebar('header_hero')) :
    echo '<div id="header-hero-sidebar" class="d-flex align-items-center">';
        dynamic_sidebar('header_hero');
    echo '</div>';
endif;
?>