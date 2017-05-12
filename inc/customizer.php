<?php
/**
 * sweetbite Theme Customizer
 *
 * @package sweetbite
 * @subpackage Theme customizer
 * @author Solomon Culaste
 */

if ( ! function_exists( 'sweetbite_customize_register' ) ) :
	/**
	 * Register the theme customizer supports.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	function sweetbite_customize_register( $wp_customize ) {
		/**
		 * Add postMessage support for site title and
		 * description for the Theme Customizer.
		 */
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

		/**
		 * Layout options section
		 */
		require __DIR__ . '/customizer-sections/theme-layout.php';

		/**
		 * Header section
		 */
		require __DIR__ . '/customizer-sections/theme-header.php';
	}
endif;
add_action( 'customize_register', 'sweetbite_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sweetbite_customize_preview_js() {
	wp_enqueue_script( 'sweetbite_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'sweetbite_customize_preview_js' );
