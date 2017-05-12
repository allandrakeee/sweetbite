<?php
/**
 * sweetbite header hero
 * 
 * @package sweetbite
 * @subpackage Header hero
 * @author Solomon Culaste
 */


if ( ! function_exists('header_hero') ) :

    function header_hero() {

        $theme_mod = is_front_page() ? 'sweetbite_fp_header_type' : 'sweetbite_header_type';
        include 'heroes/' . str_replace('_', '-', get_theme_mod($theme_mod)) . '.php';

    }

endif;

/**
 * Slider hero
 * 
 * @return void
 */

function slider_hero() {
}

/**
 * Static hero
 * 
 * @return void
 */

function static_hero() {
    ?>

    <div id="wrapper-hero" class="wrapper">
        <div id="static-hero" style="background-color: grey;"></div>
        <?php get_template_part( 'inc/sidebars/sidebar-header_hero' ); ?>
    </div>

    <?php
}