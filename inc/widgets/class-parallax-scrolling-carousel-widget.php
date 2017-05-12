<?php
/**
 * Button widget
 * @package sweetbite
 * @author Allan Drake
 */

class PARALLAX_SCROLLING_CAROUSEL_WIDGET extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {

		$widget_ops = array(
			'classname' => 'sweetbite_parallax_scrolling_carousel_widget',
			'description' => __('Widget', 'sweetbite'),
		);
		parent::__construct(false, $name = __('SweetBite Parallax Scrolling Carousel', 'sweetbite'), $widget_ops);
        $this->alt_option_name = 'sweetbite_parallax_scrolling_carousel_widget';
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

        <!-- Parallax Scrolling -->
        <div class="bgimg-2" style="background-image: url('http://placehold.it/1600x800');">
          <div class="caption" style="top: 77px; position: relative;">
            <p class="heading_secondary">Upcomming</p>
            <h2 class="heading_primary">EVENTS</h2>
          </div>

          <!-- Carousel -->
          <div class="container">
            <div class="slider-container">
              <div id="carouselExampleIndicators" class="carousel upcomming-events slide" data-ride="carousel">
                <ol class="carousel-indicators upcomming-events">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                	<!-- carousel 1 -->
					<div class="carousel-item upcomming-events active">
						<div class="row" style="background-color: #fff;">
							<!-- col 1 -->
							<div class="col-md-6 hide-pic" style="padding-right: 0px;">
								<img class="d-block img-fluid" src="http://wordpress.dev/wp-content/uploads/2017/05/bg.jpg" alt="First slide">
							</div>
							<!-- col 2 -->
							<div class="col-md-6" style="padding-left: 0px;">
							  <div class="upcomming-events-content-carousel">
							      	<h3><a class="ue-heading" href="#">Win a Free Party for 6</a></h3>
							      	<p class="ue-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed ollit anim id est laborum.</p>
							      	<p><strong>01:30 AM Sunday - 02 April 2017</strong></p>
							      	<a class="ue-view-details" href="#">View Details</a>
							  </div>              			
							</div>
						</div>
					</div> 
	                  	
	                <!-- carousel 2 -->
					<div class="carousel-item upcomming-events">
						<div class="row" style="background-color: #fff;">
							<!-- col 1 -->
							<div class="col-md-6 hide-pic" style="padding-right: 0px;">
								<img class="d-block img-fluid" src="http://wordpress.dev/wp-content/uploads/2017/05/bg.jpg" alt="First slide">
							</div>
							<!-- col 2 -->
							<div class="col-md-6" style="padding-left: 0px;">
							  <div class="upcomming-events-content-carousel">
							      	<h3><a class="ue-heading" href="#">Win a Free Party for 6</a></h3>
							      	<p class="ue-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed ollit anim id est laborum.</p>
							      	<p><strong>01:30 AM Sunday - 02 April 2017</strong></p>
							      	<a class="ue-view-details" href="#">View Details</a>
							  </div>              			
							</div>
						</div>
					</div> 
	                
	                <!-- carousel 3 -->
					<div class="carousel-item upcomming-events">
						<div class="row" style="background-color: #fff;">
							<!-- col 1 -->
							<div class="col-md-6 hide-pic" style="padding-right: 0px;">
								<img class="d-block img-fluid" src="http://wordpress.dev/wp-content/uploads/2017/05/bg.jpg" alt="First slide">
							</div>
							<!-- col 2 -->
							<div class="col-md-6" style="padding-left: 0px;">
							  <div class="upcomming-events-content-carousel">
							      	<h3><a class="ue-heading" href="#">Win a Free Party for 6</a></h3>
							      	<p class="ue-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed ollit anim id est laborum.</p>
							      	<p><strong>01:30 AM Sunday - 02 April 2017</strong></p>
							      	<a class="ue-view-details" href="#">View Details</a>
							  </div>              			
							</div>
						</div>
					</div> 
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
