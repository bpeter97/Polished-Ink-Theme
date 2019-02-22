<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/class-wp-contact.php';
require_once get_template_directory() . '/class-wp-shortcode-input.php';
require_once get_template_directory() . '/inc/customizer.php';

add_filter( 'widget_text', 'do_shortcode' );

// Theme Support
function wpb_theme_setup(){
  // Support for nav menus
  register_nav_menus( array(
    'primary' => __( 'Primary Menu'),
  ));
}

add_action('after_setup_theme', 'wpb_theme_setup');

function wpb_init_widgets($id){
  register_sidebar(array(
    'name' => 'Shop Contact Details',
    'id' => 'contact',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
  ));
  register_sidebar(array(
    'name' => 'Gallery Shortcode',
    'id' => 'galleryshortcode',
    'before_widget' => '<div class="col-sm-12 mb-4 mt-4">',
    'after_widget' => '</div>'
  ));
  register_sidebar(array(
    'name' => 'Contact Form Shortcode',
    'id' => 'contactshortcode',
    'before_widget' => '<div class="col-sm-12">',
    'after_widget' => '</div>'
  ));
}

add_action('widgets_init', 'wpb_init_widgets');

function wp_custom_widgets() {
  register_widget('WP_PI_Contact');
  register_widget('WP_Shortcode_Input');
}

add_action( 'widgets_init', 'wp_custom_widgets' );

/**
 * Remove the additional CSS section, introduced in 4.7, from the Customizer.
 * @param $wp_customize WP_Customize_Manager
 */
function mycustomfunc_remove_css_section( $wp_customize ) {	
	$wp_customize->remove_section( 'custom_css' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_panel( 'widgets' );
}
add_action( 'customize_register', 'mycustomfunc_remove_css_section', 15 );