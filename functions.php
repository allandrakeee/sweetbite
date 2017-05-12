<?php
/**
 * sweetbite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package sweetbite
 * @author Allan Drake
 */

/**
 * Theme constants variables
 */
require get_template_directory() . '/inc/constants.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget areas.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/inc/widgets.php';

require get_template_directory() . '/inc/custom-post-types.php';
/**
 * Load functions to secure your WP install.
 */
require get_template_directory() . '/inc/security.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * The theme's header type for front page and general pages.
 */
require get_template_directory() . '/inc/header-hero.php';

/**
 * Custom template tags for this theme.
 */
// require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
// require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
// require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
// require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
// require get_template_directory() . '/inc/editor.php';

/////////////////////////////////////////////////////////////////////////////////

// sweetbite setup

// sweetbite content_width

// sweetbite widgets_init

// sweetbite enqueue scripts and styles

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';