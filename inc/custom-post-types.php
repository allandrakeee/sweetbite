<?php
/**
 * Registration of
 * Custom post types
 *
 * @package sweetbite
 * @author Allan Drake
 */

if(!function_exists('sweetbite_cpt')) :

    function sweetbite_cpt() {
        /** THEME SLIDER CPT **/
        register_post_type(
            'sweetbite_slider',
            apply_filters(
                'sweetbite_post_type_slider',
                array(
        			'labels' => array(
        				'name'                => _x( 'Slider', 'Post Type General Name', 'sweetbite' ),
        				'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'sweetbite' ),
        				'menu_name'           => __( 'Sliders', 'sweetbite' ),
        				'all_items'           => __( 'All Sliders', 'sweetbite' ),
        				'view_item'           => __( 'View Slider', 'sweetbite' ),
        				'add_new_item'        => __( 'Add New', 'sweetbite' ),
        				'add_new'             => __( 'Add New', 'sweetbite' ),
        				'edit_item'           => __( 'Edit Slider', 'sweetbite' ),
        				'update_item'         => __( 'Update Slider', 'sweetbite' ),
        				'search_items'        => __( 'Search Slider', 'sweetbite' ),
        				'not_found'           => __( 'No Slider found', 'sweetbite' )
        			),
        			'description'           => __( 'This is where theme sliders are stored.', 'sweetbite' ),
        			'public'                => true,
        			'show_ui'               => true,
        			'capability_type'       => 'post',
        			'map_meta_cap'          => true,
        			'publicly_queryable'    => true,
        			'exclude_from_search'   => true,
        			'hierarchical'          => false,
        			'show_in_nav_menus'     => true,
        			'rewrite'               => array( 'slug' => 'slider' ),
        			'query_var'             => true,
        			'supports'              => array( 'title' ),
        			'has_archive'           => 'sweetbite_slider',
        			'menu_icon'             => 'dashicons-slides',
                )

            )
        );

        /** MENU **/
        register_post_type(
            'sweetbite_menu',
            apply_filters(
                'sweetbite_post_type_menu',
                array(
                    'labels' => array(
                        'name'                => _x( 'Menu', 'Post Type General Name', 'sweetbite' ),
                        'singular_name'       => _x( 'Menu', 'Post Type Singular Name', 'sweetbite' ),
                        'menu_name'           => __( 'Menus', 'sweetbite' ),
                        'all_items'           => __( 'All Menus', 'sweetbite' ),
                        'view_item'           => __( 'View Menu', 'sweetbite' ),
                        'add_new_item'        => __( 'Add New', 'sweetbite' ),
                        'add_new'             => __( 'Add New', 'sweetbite' ),
                        'edit_item'           => __( 'Edit Menu', 'sweetbite' ),
                        'update_item'         => __( 'Update Menu', 'sweetbite' ),
                        'search_items'        => __( 'Search Menu', 'sweetbite' ),
                        'not_found'           => __( 'No Menu found', 'sweetbite' )
                    ),
                    'description'           => __( 'This is where menus custom post type are stored.', 'sweetbite' ),
                    'public'                => true,
                    'show_ui'               => true,
                    'capability_type'       => 'post',
                    'map_meta_cap'          => true,
                    'publicly_queryable'    => true,
                    'exclude_from_search'   => true,
                    'hierarchical'          => false,
                    'show_in_nav_menus'     => true,
                    'rewrite'               => array( 'slug' => 'menu' ),
                    'query_var'             => true,
                    'supports'              => array( 'title', 'thumbnail', 'editor', 'page-attributes' ),
                    'has_archive'           => 'sweetbite_menu',
                    'menu_icon'             => 'dashicons-carrot',
                )
            )
        );

        
    }

endif;
add_action('init', 'sweetbite_cpt');

if ( !function_exists('register_sweetbite_taxonomy') ) :
    function register_sweetbite_taxonomy() {
        // Menu category taxonomy code

        $labels = array(
            'name'              => _x( 'Menu categories', 'taxonomy general name', 'sweetbite' ),
            'singular_name'     => _x( 'Menu category', 'taxonomy singular name', 'sweetbite' ),
            'search_items'      => __( 'Search Menu categories', 'sweetbite' ),
            'all_items'         => __( 'All Menu categories', 'sweetbite' ),
            'parent_item'       => __( 'Parent Menu category', 'sweetbite' ),
            'parent_item_colon' => __( 'Parent Menu category:', 'sweetbite' ),
            'edit_item'         => __( 'Edit Menu category', 'sweetbite' ),
            'update_item'       => __( 'Update Menu category', 'sweetbite' ),
            'add_new_item'      => __( 'Add New Menu category', 'sweetbite' ),
            'new_item_name'     => __( 'New Menu category Name', 'sweetbite' ),
            'menu_name'         => __( 'Menu category', 'sweetbite' ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'menu-caterory' ),
        );

        register_taxonomy( 'menu_category', 'sweetbite_menu', $args );
    }
endif;
add_action('init', 'register_sweetbite_taxonomy');


/**
 * Change title placeholder
 * for custom post types
 * @param  [String] $title
 */
function sweetbite_change_title_text( $title ){
     $screen = get_current_screen();

     if ('sweetbite_menu' == $screen->post_type)
          $title = 'Enter Menu name';

     return $title;
}
add_filter('enter_title_here', 'sweetbite_change_title_text');
