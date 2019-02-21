<?php

if( ! class_exists('WP_PI_Contact')){


  class WP_PI_Contact extends WP_Widget {
    function WP_PI_Contact() {
      // Instantiate the parent object
      parent::__construct(
                'wp_pi_contact', // Base ID
                __('WP Contact', 'text_domain'), // Name
                array( 'description' => __( 'The shop address, phone #, and email.', 'text_domain' ), ) // Args
      );
    }
  
    function widget( $args, $instance ) {
      echo $args['before_widget'];
      echo '<div class="row pb-3">';
        echo '<div class="col-12">';
          echo '<img src="' . get_template_directory_uri() . '/img/pi-logo.png" alt="" />';
        echo '</div>';
      echo '</div>';
      echo '<div class="row pb-3">';
        echo '<div class="col-12">';
          echo '<h2>Address</h2>';
          echo '<p class="mb-0">' . $instance['address1'] . '</p>';
          echo '<p class="mt-1">' . $instance['address2'] . '</p>';
        echo '</div>';
      echo '</div>';
      echo '<div class="row pb-3">';
        echo '<div class="col-12">';
          echo '<h2>Phone</h2>';
          echo '<p>' . $instance['phone'] . '</p>';
        echo '</div>';
      echo '</div>';
      echo '<div class="row pb-3">';
        echo '<div class="col-12">';
          echo '<h2>Email</h2>';
          echo '<p class="mb-0">' . $instance['email'] . '</p>';
        echo '</div>';
      echo '</div>';
      echo $args['after_widget'];
    }
  
    function update($new_instance, $old_instance) {
      $instance = $old_instance;
      // Fields
      $instance['address1'] = strip_tags($new_instance['address1']);
      $instance['address2'] = strip_tags($new_instance['address2']);
      $instance['phone'] = strip_tags($new_instance['phone']);
      $instance['email'] = strip_tags($new_instance['email']);
      return $instance;
    }
  
    // Widget form creation
    function form($instance) {
      $address1 = '';
      $address2 = '';
      $phone = '';
      $email = '';
  
      // Check values
      if( $instance) {
        $address1 = esc_attr($instance['address1']);
        $address2 = esc_textarea($instance['address2']);
        $phone = esc_textarea($instance['phone']);
        $email = esc_textarea($instance['email']);
      } ?>
       
      <p>
        <label for="<?php echo $this->get_field_id('address1'); ?>"><?php _e('Address (Street Address)', 'wp_widget_plugin'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('address1'); ?>" name="<?php echo $this->get_field_name('address1'); ?>" type="text" value="<?php echo $address1; ?>" />
      </p>
       
      <p>
        <label for="<?php echo $this->get_field_id('address2'); ?>"><?php _e('City, State, Zipcode', 'wp_widget_plugin'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('address2'); ?>" name="<?php echo $this->get_field_name('address2'); ?>" type="text" value="<?php echo $address2; ?>" />
      </p>
       
      <p>
        <label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Phone', 'wp_widget_plugin'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" type="text" value="<?php echo $phone; ?>" />
      </p>

      <p>
        <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email', 'wp_widget_plugin'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>" />
      </p>
      
    <?php }
  }
}
?>
  
  
  