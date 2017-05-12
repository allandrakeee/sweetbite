<?php
/**
 * Button widget
 * @package sweetbite
 * @author Allan Drake
 */

class WHATS_NEW_WIDGET extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {

		$widget_ops = array(
			'classname' => 'sweetbite_whats_new_widget',
			'description' => __('Widget', 'sweetbite'),
		);
		parent::__construct(false, $name = __('SweetBite Whats New', 'sweetbite'), $widget_ops);
        $this->alt_option_name = 'sweetbite_whats_new_widgets';
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

	    <!-- Whats new -->
	    <div class="container">
	      <div class="caption" style="top: 75px; position: relative;">
	        <p class="heading_secondary">What</p>
	        <h2 class="heading_primary" style="color: black">NEW</h2>
	      </div>
	    
	      <div class="row whats-new-inner">
	        <div class="col-md-4 whats-new-col text-center">
	          <div class="row">
	          	<div class="col-md-12" style="border: 1px solid rgb(221, 221, 221); height: 400px">
	          		facebook
	          	</div>
	          </div>
	        </div>
	        <div class="col-md-4 whats-new-col text-center">
	          <div class="row">
	          	<div class="col-md-12" style="border: 1px solid rgb(221, 221, 221); height: 400px">
	          		twitter
	          	</div>
	          </div>
	        </div>
	        <div class="col-md-4 whats-new-col text-center">
	          <div class="row">
	          	<div class="col-md-12" style="border: 1px solid rgb(221, 221, 221); height: 400px">
	          		instagram
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
