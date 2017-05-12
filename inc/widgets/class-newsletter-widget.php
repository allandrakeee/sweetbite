<?php
/**
 * Button widget
 * @package sweetbite
 * @author Allan Drake
 */

class NEWSLETTER_WIDGET extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {

		$widget_ops = array(
			'classname' => 'sweetbite_newsletter_widget_widget',
			'description' => __('Widget', 'sweetbite'),
		);
		parent::__construct(false, $name = __('SweetBite Newsletter', 'sweetbite'), $widget_ops);
        $this->alt_option_name = 'sweetbite_newsletter_widget_widget';
	}

	function form($instance) {
		
	}

	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		// $instance['text'] = strip_tags($new_instance['text']);
  //       $instance['link'] = esc_url_raw($new_instance['link']);
  //       $instance['style'] = strip_tags($new_instance['style']);
  //       $instance['color'] = strip_tags($new_instance['color']);
		// $instance['display'] = strip_tags($new_instance['display']);

		// $alloptions = wp_cache_get('alloptions', 'options');
		// if (isset($alloptions['kidsworld_button']))
		// 	delete_option('kidsworld_button');

		return $instance;
	}

	// display widget
	function widget($args, $instance) {
		$cache = array();
		if ( ! $this->is_preview() ) {
			$cache = wp_cache_get( 'sweetbite_button', 'widget' );
		}

		if ( ! is_array( $cache ) ) {
			$cache = array();
		}

		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		if ( isset( $cache[ $args['widget_id'] ] ) ) {
			echo $cache[ $args['widget_id'] ];
			return;
		}

		ob_start();
		extract($args);

		// $text = ( ! empty( $instance['text'] ) ) ? $instance['text'] : 'Change me';
  //       $link = ( ! empty( $instance['link'] ) ) ? $instance['link'] : '#';
  //       $style = ( ! empty( $instance['style'] ) ) ? $instance['style'] : 'solid';
  //       $color = ( ! empty( $instance['color'] ) ) ? $instance['color'] : 'btn-primary';
		// $display = ( ! empty( $instance['display'] ) ) ? $instance['display'] : 'block';

		echo $args['before_widget'];

        ?>

		  <!-- Newsletter -->
		  <div class="newsletter-container">
		    <div class="container">
		      <div class="newsletter-content">
		        <div class="row">
		        <div class="col-md-4"><h3>Get out newsletter</h3></div>
		        <div class="col-md-8">
		          <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-2396" method="post" data-id="2396" data-name="Default sign-up form">
		          <div class="mc4wp-form-fields">
		            
		            <input type="email" id="mc4wp_email" name="EMAIL" placeholder="Your email here" required="">
		            <input type="submit" value="SIGN IN">
		            <div style="display: none;">
		              <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off">
		            </div>
		            <input type="hidden" name="_mc4wp_timestamp" value="1493879987">
		            <input type="hidden" name="_mc4wp_form_id" value="2396">
		            <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
		          </div>
		          <div class="mc4wp-response"></div>
		        </form>
		          </div>
		        
		          </div>
		      </div>
		    </div>
		  </div>
 

        <?php

		echo $args['after_widget'];

		if (! $this->is_preview()) {
			$cache[$args['widget_id']] = ob_get_flush();
			wp_cache_set('sweetbite_categories', $cache, 'widget');
		} else {
			ob_end_flush();
		}
	}

}
