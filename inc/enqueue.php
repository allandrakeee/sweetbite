<?php
/**
 * Enqueue scripts and styles.
 * 
 * @package sweetbite
 * @subpackage Enqueue
 * @author Solomon Culaste
 */

if( ! function_exists( 'sweetbite_scripts' ) ) :

    function sweetbite_scripts() {

        $the_theme = wp_get_theme();        
        $file_name = ( ENV == 'local' ) ? 'theme' : 'theme.min';

        /**
         * Theme main styles
         */
        wp_enqueue_style(
            'sweetbite-style',
            get_stylesheet_directory_uri() . '/assets/css/'. $file_name . '.css',
            array(),
            $the_theme->get( 'Version' )
        );

        /**
         * Theme main scripts
         */
        wp_enqueue_script(
            'sweetbite-scripts',
            get_template_directory_uri() . '/assets/js/'. $file_name . '.js',
            array(),
            $the_theme->get( 'Version' ),
            true
        );

        /**
         * Load only comment-reply scripts on pages that requires.
         */
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );
    }

endif;
add_action( 'wp_enqueue_scripts', 'sweetbite_scripts' );