<?php
/**
 * Button widget
 * @package sweetbite
 * @author Allan Drake
 */

class RESERVATION_WIDGET extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {

		$widget_ops = array(
			'classname' => 'sweetbite_reservation_widget',
			'description' => __('Widget', 'sweetbite'),
		);
		parent::__construct(false, $name = __('SweetBite Reservation', 'sweetbite'), $widget_ops);
        $this->alt_option_name = 'sweetbite_reservation_widget';
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

        <div class="container">
            <div class="reservation-headings">
                <div class="row">
                    <div class="col-md-12">
                        <div class="reservation-caption">
                            <p class="heading_secondary">Book a</p>
                            <h2 class="heading_primary">TABLE</h2>
                        </div>
                        <div class="reservation-description">
                            <p class="inner-reservation-description">Opening Hour <strong>8:00</strong> AM - <strong>10:00</strong> PM, every day on week.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="reservation-container">
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="row">
                                    <div class="form-group col-md-3">
                                    <input type="time" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                    </div>

                                    <div class="form-group col-md-3">
                                    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <select class="custom-select form-control">
                                            <option value="1">1 people</option>
                                            <option selected>2 people</option>
                                            <option value="2">3 people</option>
                                            <option value="3">4 people</option>
                                            <option value="3">5 people</option>
                                            <option value="3">6 people</option>
                                            <option value="3">7 people</option>
                                            <option value="3">8 people</option>
                                            <option value="3">9 people</option>
                                            <option value="3">10 people</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <button type="submit" class="btn btn-primary form-control">Submit</button>
                                    </div>
                                    
                            </div>
                        </form>
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
