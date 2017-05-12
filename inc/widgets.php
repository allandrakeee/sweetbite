<?php
/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @package sweetbite
 * @subpackage widgets
 * @author Solomon Culaste
 */

/**
 * Count number of widgets in a sidebar
 * Used to add classes to widget areas so widgets can be displayed one, two, three or four per row
 */
function slbd_count_widgets( $sidebar_id ) {
	// If loading from front page, consult $_wp_sidebars_widgets rather than options
	// to see if wp_convert_widget_settings() has made manipulations in memory.
	global $_wp_sidebars_widgets;
	if ( empty( $_wp_sidebars_widgets ) ) :
		$_wp_sidebars_widgets = get_option( 'sidebars_widgets', array() );
	endif;
	
	$sidebars_widgets_count = $_wp_sidebars_widgets;
	
	if ( isset( $sidebars_widgets_count[ $sidebar_id ] ) ) :
		$widget_count = count( $sidebars_widgets_count[ $sidebar_id ] );
		$widget_classes = 'widget-count-' . count( $sidebars_widgets_count[ $sidebar_id ] );
		if ( $widget_count % 4 == 0 || $widget_count > 6 ) :
			// Four widgets er row if there are exactly four or more than six
			$widget_classes .= ' col-md-3';
		elseif ( 6 == $widget_count ) :
			// If two widgets are published
			$widget_classes .= ' col-md-2';
		elseif ( $widget_count >= 3 ) :
			// Three widgets per row if there's three or more widgets 
			$widget_classes .= ' col-md-4';
		elseif ( 2 == $widget_count ) :
			// If two widgets are published
			$widget_classes .= ' col-md-6';
		elseif ( 1 == $widget_count ) :
			// If just on widget is active
			$widget_classes .= ' col-md-12';
		endif; 
		return $widget_classes;
	endif;
}

if ( ! function_exists( 'sweetbite_widgets_init' ) ) :

    function sweetbite_widgets_init() {

		/**
		 * Header hero widget area.
		 * All contents that is placed here
		 * will be on top of the header hero div/section.
		 */
		register_sidebar( array(
			'name'          => __( 'Header hero', 'sweetbite' ),
			'id'            => 'header_hero',
			'description'   => 'Widget area on top of header hero section',
		    'before_widget'  => '<div id="%1$s" class="widget %2$s">', 
		    'after_widget'   => '</div>', 
		    'before_title'   => '', 
		    'after_title'    => '', 
		) );

        /**
         * Right sidebar
         */
        register_sidebar( array(
			'name'          => __( 'Right Sidebar', 'sweetbite' ),
			'id'            => 'right-sidebar',
			'description'   => 'Right sidebar widget area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

        /**
         * Left sidebar
         */
		register_sidebar( array(
			'name'          => __( 'Left Sidebar', 'sweetbite' ),
			'id'            => 'left-sidebar',
			'description'   => 'Left sidebar widget area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		/**
		 * Full width section on footer area
		 */
		register_sidebar( array(
			'name'          => __( 'Footer Full', 'sweetbite' ),
			'id'            => 'footerfull',
			'description'   => 'Widget area below main content and above footer',
		    'before_widget'  => '<div id="%1$s" class="footer-widget %2$s '. slbd_count_widgets( 'footerfull' ) .'">', 
		    'after_widget'   => '</div><!-- .footer-widget -->', 
		    'before_title'   => '<h3 class="widget-title">', 
		    'after_title'    => '</h3>', 
		) );

		/**
		 * Theme Widgets
		 */
		if ( function_exists('siteorigin_panels_activate') ) {
			require 'widgets/class-reservation-widget.php';
			require 'widgets/class-parallax-scrolling-food-widget.php';
			require 'widgets/class-parallax-scrolling-carousel-widget.php';
			require 'widgets/class-whats-new-widget.php';
			require 'widgets/class-newsletter-widget.php';
			register_widget('RESERVATION_WIDGET');
			register_widget('PARALLAX_SCROLLING_FOOD_WIDGET');
			register_widget('PARALLAX_SCROLLING_CAROUSEL_WIDGET');
			register_widget('WHATS_NEW_WIDGET');
			register_widget('NEWSLETTER_WIDGET');
		}

    }

endif;
add_action( 'widgets_init', 'sweetbite_widgets_init' );