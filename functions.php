<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/class-wp-bootstrap-artist-card.php';
require_once get_template_directory() . '/class-wp-bootstrap-day.php';
require_once get_template_directory() . '/class-wp-contact.php';
require_once get_template_directory() . '/class-wp-main-message.php';
require_once get_template_directory() . '/class-wp-fontawesome-social-media.php';
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
    'name' => 'Artists',
    'id' => 'artists',
    'before_widget' => '<div class="col team-wrap" style="max-width: 400px;">',
    'after_widget' => '</div>'
  ));
  register_sidebar(array(
    'name' => 'Work Hours',
    'id' => 'workhours',
    'before_widget' => '<div class="col day-container">',
    'after_widget' => '</div>'
  ));
  register_sidebar(array(
    'name' => 'Shop Contact Details',
    'id' => 'contact',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
  ));
  register_sidebar(array(
    'name' => 'Landing Page Message',
    'id' => 'mainmessage',
    'before_widget' => '<h1 class="mb-5 header-landing-text">',
    'after_widget' => '</h1>'
  ));
  register_sidebar(array(
    'name' => 'Footer Social Media',
    'id' => 'footersocialmedia',
    'before_widget' => '<ul class="list-inline list-social">',
    'after_widget' => '</ul>'
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
  register_widget('WP_Bootstrap_Artist_Card');
  register_widget('WP_Bootstrap_Day');
  register_widget('WP_PI_Contact');
  register_widget('WP_Main_Message');
  register_widget('WP_Fontawesome_Social_Media');
  register_widget('WP_Shortcode_Input');
}

add_action( 'widgets_init', 'wp_custom_widgets' );