<?php 

function wpb_customize_register($wp_customize){

  // Footer Facebook Link
  $wp_customize->add_setting('footer_facebook', array(
    'default' => _x('http://www.facebook.com/tpitboss/', 'polishedink'),
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control('footer_facebook', array(
    'label'    => __('Footer Facebook Link', 'polishedink'),
    'section'  => 'title_tagline',
    'priority' => 99999
  ));

  // Landing Page
  $wp_customize->add_section('landing_section', array(
    'title'       => __('Landing Section', 'polishedink'),
    'description' => sprintf(__('Options for Landing Section', 'polishedink')),
    'priority'    => 130
  ));

  $wp_customize->add_setting('landing_section_image', array(
    'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'landing_section_image', array(
    'label'    => __('Landing Image', 'polishedink'),
    'section'  => 'landing_section',
    'settings' => 'landing_section_image',
    'priority' => 1
  )));

  $wp_customize->add_setting('landing_section_message', array(
    'default' => _x('GOOD TATTOOS AREN\'T CHEAP AND CHEAP TATTOOS AREN\'T GOOD.', 'polishedink'),
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control('landing_section_message', array(
    'label'    => __('Landing Message', 'polishedink'),
    'section'  => 'landing_section',
    'priority' => 2
  ));

  // Artists Section
  $wp_customize->add_panel( 'artists_section', array(
    'priority'       => 140,
     'capability'     => 'edit_theme_options',
     'theme_supports' => '',
     'title'          => __('Artists Section', 'polishedink'),
     'description'    => __('Add / Edit # of artists', 'polishedink'),
   ));

  $wp_customize->add_section('artists_num_of_artists', array(
    'title'       => __('Number of Artists', 'polishedink'),
    'description' => sprintf(__('Enter a number of Artists', 'polishedink')),
    'panel'       => 'artists_section',
    'priority'    => 1
  ));

  // # of Artists
  $wp_customize->add_setting('artist_section_number_of_artists', array(
    'default' => _x(1, 'polishedink'),
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control('artist_section_number_of_artists', array(
    'label'    => __('Number of Artists', 'polishedink'),
    'section'  => 'artists_num_of_artists',
    'priority' => 1
  ));

  for ($x = 1; $x <= get_theme_mod('artist_section_number_of_artists'); $x++) {
    $wp_customize->add_section('artist_'.$x, array(
      'title'       => __('Artist #'.$x, 'polishedink'),
      'description' => sprintf(__('Artists #'.$x.' Info', 'polishedink')),
      'panel'       => 'artists_section',
      'priority'    => $x+1
    ));

    // Image
    $wp_customize->add_setting('artist_'.$x.'_image', array(
      'default' => get_bloginfo('template_directory').'/img/emptyperson.png',
      'type'    => 'theme_mod'
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'artist_'.$x.'_image', array(
      'label'    => __('Artist\'s Image', 'polishedink'),
      'section'  => 'artist_'.$x,
      'settings' => 'artist_'.$x.'_image',
      'priority' => 1
    )));

    // Name
    $wp_customize->add_setting('artist_'.$x.'_name', array(
      'default' => _x("Full Name", 'polishedink'),
      'type'    => 'theme_mod'
    ));
  
    $wp_customize->add_control('artist_'.$x.'_name', array(
      'label'    => __('Name', 'polishedink'),
      'section'  => 'artist_'.$x,
      'priority' => 2
    ));

    // Position
    $wp_customize->add_setting('artist_'.$x.'_position', array(
      'default' => _x("Artist", 'polishedink'),
      'type'    => 'theme_mod'
    ));
  
    $wp_customize->add_control('artist_'.$x.'_position', array(
      'label'    => __('Position', 'polishedink'),
      'section'  => 'artist_'.$x,
      'priority' => 3
    ));

    // Facebook Link
    $wp_customize->add_setting('artist_'.$x.'_email', array(
      'default' => _x("", 'polishedink'),
      'type'    => 'theme_mod'
    ));
  
    $wp_customize->add_control('artist_'.$x.'_email', array(
      'label'    => __('Email Address', 'polishedink'),
      'section'  => 'artist_'.$x,
      'priority' => 3,
      'type'     => 'email'
    ));

    // Facebook Link
    $wp_customize->add_setting('artist_'.$x.'_facebook', array(
      'default' => _x("", 'polishedink'),
      'type'    => 'theme_mod'
    ));
  
    $wp_customize->add_control('artist_'.$x.'_facebook', array(
      'label'    => __('Facebook URL', 'polishedink'),
      'section'  => 'artist_'.$x,
      'priority' => 3,
      'type'     => 'url'
    ));

    // Twitter Link
    $wp_customize->add_setting('artist_'.$x.'_twitter', array(
      'default' => _x("", 'polishedink'),
      'type'    => 'theme_mod'
    ));
  
    $wp_customize->add_control('artist_'.$x.'_twitter', array(
      'label'    => __('Twitter URL', 'polishedink'),
      'section'  => 'artist_'.$x,
      'priority' => 3,
      'type'     => 'url'
    ));

    // Instagram Link
    $wp_customize->add_setting('artist_'.$x.'_instagram', array(
      'default' => _x("", 'polishedink'),
      'type'    => 'theme_mod'
    ));
  
    $wp_customize->add_control('artist_'.$x.'_instagram', array(
      'label'    => __('Instagram URL', 'polishedink'),
      'section'  => 'artist_'.$x,
      'priority' => 3,
      'type'     => 'url'
    ));

  }

  // Work Hours Section
  $wp_customize->add_panel( 'work_hours_section', array(
    'priority'       => 140,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __('Work Hours Section', 'polishedink'),
    'description'    => __('Add / Edit Work Hours', 'polishedink'),
  ));

  $wp_customize->add_section('num_of_days', array(
    'title'       => __('Number of Days', 'polishedink'),
    'description' => sprintf(__('Enter the number of days worked per week', 'polishedink')),
    'panel'       => 'work_hours_section',
    'priority'    => 1
  ));


  // # of Days Per Week
  $wp_customize->add_setting('num_of_days_worked', array(
    'default' => _x(1, 'polishedink'),
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control('num_of_days_worked', array(
    'label'    => __('Number of Days', 'polishedink'),
    'section'  => 'num_of_days',
    'priority' => 1
  ));

  for ($x = 1; $x <= get_theme_mod('num_of_days_worked'); $x++) {
    $wp_customize->add_section('day_'.$x, array(
      'title'       => __('Day #'.$x, 'polishedink'),
      'description' => sprintf(__('Day #'.$x.' Info', 'polishedink')),
      'panel'       => 'work_hours_section',
      'priority'    => $x+1
    ));

    // Day Name
    $wp_customize->add_setting('day_'.$x.'_name', array(
      'default' => _x("", 'polishedink'),
      'type'    => 'theme_mod'
    ));
  
    $wp_customize->add_control('day_'.$x.'_name', array(
      'label'    => __('Name of Day (ex. Monday)', 'polishedink'),
      'section'  => 'day_'.$x,
      'priority' => 3,
      'type'     => 'url'
    ));

    // Times Worked
    $wp_customize->add_setting('day_'.$x.'_time', array(
      'default' => _x("", 'polishedink'),
      'type'    => 'theme_mod'
    ));
  
    $wp_customize->add_control('day_'.$x.'_time', array(
      'label'    => __('Hours (ex 9:00 AM - 9:00 PM)', 'polishedink'),
      'section'  => 'day_'.$x,
      'priority' => 3,
      'type'     => 'url'
    ));
  }

  $wp_customize->add_section('shop_info', array(
    'title'       => __('Shop Info', 'polishedink'),
    'description' => sprintf(__('Enter the address, phone number, and email for the shop.', 'polishedink')),
    'priority'    => 100
  ));


  // Street Address
  $wp_customize->add_setting('shop_street_address', array(
    'default' => _x('250 E Antelope Ave Suite G', 'polishedink'),
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control('shop_street_address', array(
    'label'    => __('Street Address', 'polishedink'),
    'section'  => 'shop_info',
    'priority' => 1
  ));

  // City, State, Zip
  $wp_customize->add_setting('shop_city_address', array(
    'default' => _x('Woodlake, CA 93286', 'polishedink'),
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control('shop_city_address', array(
    'label'    => __('City, State, Zip', 'polishedink'),
    'section'  => 'shop_info',
    'priority' => 1
  ));

  // Phone Number
  $wp_customize->add_setting('shop_phone_number', array(
    'default' => _x('(559) 564-2345', 'polishedink'),
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control('shop_phone_number', array(
    'label'    => __('Phone Number', 'polishedink'),
    'section'  => 'shop_info',
    'priority' => 1
  ));

  // Email
  $wp_customize->add_setting('shop_email', array(
    'default' => _x('anthonyelder@polished-ink.com', 'polishedink'),
    'type'    => 'theme_mod'
  ));

  $wp_customize->add_control('shop_email', array(
    'label'    => __('Email', 'polishedink'),
    'section'  => 'shop_info',
    'priority' => 1
  ));

}

add_action('customize_register', 'wpb_customize_register');

?>