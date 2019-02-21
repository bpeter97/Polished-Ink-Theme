<?php 

function wpb_customize_register($wp_customize){
  // Landing Page
  $wp_customize->add_section('landing_page', array(
    'title'       => __('Landing Page', 'polishedink'),
    'description' => sprintf(__('Options for Landing Page', 'polishedink')),
    'priority'    => 130
  ));

  $wp_customize->add_setting('landing_page_image', array(
    'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'landing_page_image', array(
    'label'    => __('Landing Image', 'polishedink'),
    'section'  => 'landing_page',
    'settings' => 'landing_page_image',
    'priority' => 1
  )));

  $wp_customize->add_setting('landing_page_message', array(
    'default' => _x('GOOD TATTOOS AREN\'T CHEAP AND CHEAP TATTOOS AREN\'T GOOD.', 'polishedink'),
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control('landing_page_message', array(
    'label'    => __('Landing Message', 'polishedink'),
    'section'  => 'landing_page',
    'priority' => 2
  ));

  // Artists

  // # of Artists

  // Image
  // Name
  // Short Description
  // Facebook Link
  // Twitter Link
  // Instagram Link

}

add_action('customize_register', 'wpb_customize_register');

?>