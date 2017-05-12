<?php
/**
 * Button widget
 * @package sweetbite
 * @author Allan Drake
 */

class PARALLAX_SCROLLING_FOOD_WIDGET extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {

		$widget_ops = array(
			'classname' => 'sweetbite_parallax_scrolling_food_widget',
			'description' => __('Widget', 'sweetbite'),
		);
		parent::__construct(false, $name = __('SweetBite Parallax Scrolling Food', 'sweetbite'), $widget_ops);
        $this->alt_option_name = 'sweetbite_parallax_scrolling_food_widget';
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

    $menu_categories = get_terms( 'menu_category', array('hide_empty' => false) );
		echo $args['before_widget'];

        ?>
        <!-- Parallax Scrolling -->
        <div class="bgimg-2" style="background-image: url('http://placehold.it/1600x550');">
            <div class="caption">
                <p class="heading_secondary">Find Our</p>
                <h2 class="heading_primary">MENU</h2>
            </div>
        </div>

        <!-- Food -->
   <div class="container food" style="margin-top: -107px;">
    <div class="navbar navbar-light bg-faded">
      <div class="nav navbar-nav row">
          <?php
            $flag = true;
            foreach($menu_categories as $category) :
          ?>
              <!--  Nav item 1  -->
              <a class="nav-item nav-link<?php echo $flag ?: ' active'; ?> food col-md-3" data-toggle="tab" href="#<?php echo $category->slug; ?>">
                <span class="box">
              <img class="img1-tab-content" src="http://sweetbite.wordpress.dev/wp-content/uploads/sites/6/2017/04/food.png" ><span><?php echo $category->name; ?><span class="sub-title"><?php echo $category->description; ?></span></span>        
              </a>   
            
          <?php
            $flag = false;
            endforeach;
          ?>
      </div>
    </div>

    <div class="tab-content">
      <!--  Tab item 1  -->
      <?php
        $flag = true;
        foreach($menu_categories as $category):
          
      ?>
      <div class="tab-pane<?php echo $flag ?: ' active'; ?>" id="<?php echo $category->slug; ?>">
          <div class="row">
          <?php
            $menus = get_posts(array(
                'post_type' => 'sweetbite_menu',
                'post_status' => 'published',
                'limit' => 8,
                'tax_query' => array(
                    array(
                      'taxonomy' => 'menu_category',
                      'field' => 'slug',
                      'terms' => $category->slug
                    )
                )
              )
            );
            foreach($menus as $menu) :
          ?>
          <!-- start loop -->
            <div class="col-md-6">
                <div class="media food">
                    <a href="#"><img class="d-flex mr-3 img-border-radius" src="http://placehold.it/110x110" alt="Generic placeholder image"></a>
                    <div class="media-body">
                      <h5 class="mt-0"><?php echo $menu->post_title ?></h5>
                      <p>Cras sit amet nibh libero, in gravida nulla.</p>
                      
                    </div>
                    <span class="price">Price<span class="price-amount"><strong>9.9</strong></span></span>
                </div>
            </div>
          <!-- end of loop -->
        <?php endforeach; ?>
          </div>
      </div>
      <?php
        $flag = false;
        endforeach;
      ?>
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
