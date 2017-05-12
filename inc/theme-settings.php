<?php
/**
 * Check and setup theme's default settings
 * 
 * @package sweetbite
 * @package Setup
 */
function sweetbite_theme_default_settings() {

    /**
     * Check if settings are set, if not set defaults.
     * Caution: DO NOT check existence using === always check with == .
     * Latest blog posts style.
     */

	$sweetbite_posts_index_style = get_theme_mod( 'sweetbite_posts_index_style' );
	if ( '' == $sweetbite_posts_index_style )
		set_theme_mod( 'sweetbite_posts_index_style', 'default' );


	/**
     * The sidebar position
     */
	$sweetbite_sidebar_position = get_theme_mod( 'sweetbite_sidebar_position' );
	if ( '' == $sweetbite_sidebar_position )
		set_theme_mod( 'sweetbite_sidebar_position', 'right' );

	/**
     * Container width
     */
	$sweetbite_container_type = get_theme_mod( 'sweetbite_container_type' );
	if ( '' == $sweetbite_container_type )
		set_theme_mod( 'sweetbite_container_type', 'container' );

	$sweetbite_fp_header_type = get_theme_mod( 'sweetbite_fp_header_type' );
	if ( '' == $sweetbite_fp_header_type )
		set_theme_mod( 'sweetbite_fp_header_type', 'slider_hero' );

	$sweetbite_header_type = get_theme_mod( 'sweetbite_header_type' );
	if ( '' == $sweetbite_header_type )
		set_theme_mod( 'sweetbite_header_type', 'static_hero' );
}