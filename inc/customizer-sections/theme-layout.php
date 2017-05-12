<?php
/**
 * sweetbite theme layout options
 * 
 * @package sweetbite
 * @subpackage Customizer/Theme layout options
 * @author Solomon Culaste
 */

/**
 * sweetbite_theme_layout_options
 * SECTION
 */
$wp_customize->add_section(
    'sweetbite_theme_layout_options',
    array(
        'title'       => __( 'Layout Settings', 'sweetbite' ),
        'capability'  => 'edit_theme_options',
        'description' => __( 'Container width and sidebar defaults', 'sweetbite' ),
        'priority'    => 160,
    )
);

/**
 * sweetbite_container_type
 * SETTING
 */
$wp_customize->add_setting(
    'sweetbite_container_type',
    array(
        'default'           => 'container',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'esc_textarea',
        'capability'        => 'edit_theme_options',
    )
);

/**
 * sweetbite_container_type_control
 * CONTROL
 */
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'sweetbite_container_type_control',
        array(
            'label'       => __( 'Container Width', 'sweetbite' ),
            'description' => __( "Choose between Bootstrap's container and container-fluid", 'sweetbite' ),
            'section'     => 'sweetbite_theme_layout_options',
            'settings'    => 'sweetbite_container_type',
            'type'        => 'select',
            'choices'     => array(
                'container'       => __( 'Fixed width container', 'sweetbite' ),
                'container-fluid' => __( 'Full width container', 'sweetbite' ),
            ),
            'priority'    => '10',
        )
    )
);

/**
 * sweetbite_sidebar_position
 * SETTING
 */
$wp_customize->add_setting(
    'sweetbite_sidebar_position',
    array(
        'default'           => 'right',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'esc_textarea',
        'capability'        => 'edit_theme_options',
    )
);

/**
 * sweetbite_sidebar_position_control
 * CONTROL
 */
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'sweetbite_sidebar_position_control',
        array(
            'label'       => __( 'Sidebar Positioning', 'sweetbite' ),
            'description' => __( "Set sidebar's default position. Can either be: right, left, both or none. Note: this can be overridden on individual pages.",
            'sweetbite' ),
            'section'     => 'sweetbite_theme_layout_options',
            'settings'    => 'sweetbite_sidebar_position',
            'type'        => 'select',
            'choices'     => array(
                'right' => __( 'Right sidebar', 'sweetbite' ),
                'left'  => __( 'Left sidebar', 'sweetbite' ),
                'both'  => __( 'Left & Right sidebars', 'sweetbite' ),
                'none'  => __( 'No sidebar', 'sweetbite' ),
            ),
            'priority'    => '20',
        )
    )
);