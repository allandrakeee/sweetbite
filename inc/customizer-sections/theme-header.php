<?php
/**
 * sweetbite theme header options
 * 
 * @package sweetbite
 * @subpackage Customizer/Theme header options
 * @author Solomon Culaste
 */

/**
 * sweetbite_theme_header_panel
 * PANEL
 */
$wp_customize->add_panel(
    'sweetbite_theme_header_panel',
    array(
        'title' => __('Header area', 'sweetbite'),
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'description' => 'sweetbite theme header settings'    
    )
);

/**
 * sweetbite_theme_header_hero_options
 * SECTION
 */
$wp_customize->add_section(
    'sweetbite_theme_header_hero_options',
    array(
        'title'         => __( 'Header Settings', 'sweetbite' ),
        'description'   => __( 'Choose between slider or a static hero', 'sweetbite' ),
        'capability'    => 'edit_theme_options',
        'panel'         => 'sweetbite_theme_header_panel'
    )
);

/**
 * sweetbite_fp_header_type
 * SETTING
 */
$wp_customize->add_setting(
    'sweetbite_fp_header_type',
    array(
        'default'           => 'slider_hero',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'esc_textarea',
        'capability'        => 'edit_theme_options',
    )
);

/**
 * sweetbite_fp_header_type_control
 * CONTROL
 */
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'sweetbite_fp_header_type_control',
        array(
            'label'       => __( 'FP header type', 'sweetbite' ),
            'section'     => 'sweetbite_theme_header_hero_options',
            'settings'    => 'sweetbite_fp_header_type',
            'type'        => 'select',
            'choices'     => array(
                'slider_hero'       => __( 'Slider hero', 'sweetbite' ),
                'static_hero' => __( 'Static hero', 'sweetbite' ),
            )
        )
    )
);

/**
 * sweetbite_header_type
 * SETTING
 */
$wp_customize->add_setting(
    'sweetbite_header_type',
    array(
        'default'           => 'static_hero',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'esc_textarea',
        'capability'        => 'edit_theme_options',
    )
);

/**
 * sweetbite_header_type_control
 * CONTROL
 */
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'sweetbite_header_type_control',
        array(
            'label'       => __( 'Header type', 'sweetbite' ),
            'section'     => 'sweetbite_theme_header_hero_options',
            'settings'    => 'sweetbite_header_type',
            'type'        => 'select',
            'choices'     => array(
                'slider_hero'       => __( 'Slider hero', 'sweetbite' ),
                'static_hero' => __( 'Static hero', 'sweetbite' ),
            )
        )
    )
);


/**
 * sweetbite_hero_slider
 * SETTING
 */
$wp_customize->add_setting(
    'sweetbite_hero_slider',
    array(
        'default'           => 'static_hero',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'absint',
        'capability'        => 'edit_theme_options',
    )
);

$hero_sliders = get_posts(
    array(
        'post_type' => 'sweetbite_slider',
        'post_status' => 'publish'
    )
);

$hero_sliders_choices = array();

foreach($hero_sliders as $hero_slide) {
    $hero_sliders_choices[$hero_slide->ID] = __($hero_slide->post_title, 'sweetbite');
}


/**
 * sweetbite_hero_slider_control
 * CONTROL
 */
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'sweetbite_hero_slider_control',
        array(
            'label'       => __( 'Hero slider', 'sweetbite' ),
            'section'     => 'sweetbite_theme_header_hero_options',
            'settings'    => 'sweetbite_hero_slider',
            'type'        => 'select',
            'choices'     => $hero_sliders_choices
        )
    )
);