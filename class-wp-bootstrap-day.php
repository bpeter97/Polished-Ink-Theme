<?php

if( ! class_exists('WP_Bootstrap_Day')){


  class WP_Bootstrap_Day extends WP_Widget {
    function WP_Bootstrap_Day() {
      // Instantiate the parent object
      parent::__construct(
                'wp_bootstrap_day', // Base ID
                __('WP Bootstrap Day', 'text_domain'), // Name
                array( 'description' => __( 'Widget for the work hours.', 'text_domain' ), ) // Args
      );
    }
  
    function widget( $args, $instance ) {
      echo $args['before_widget'];
        echo '<div class="row h-100 text-center justify-content-center">';
          echo '<p class="col-12 mt-auto mb-auto day-text">'. $instance['day'] .'</p>';
          echo '<p class="col-12 mt-auto mb-auto time-text">' . $instance['time'] . '</p>';
        echo '</div>';
      echo $args['after_widget'];
    }
  
    function update($new_instance, $old_instance) {
      $instance = $old_instance;
      // Fields
      $instance['day'] = strip_tags($new_instance['day']);
      $instance['time'] = strip_tags($new_instance['time']);
      return $instance;
    }
  
    // Widget form creation
    function form($instance) {
      $day = '';
      $time = '';
  
      // Check values
      if( $instance) {
        $day = esc_attr($instance['day']);
        $time = esc_textarea($instance['time']);
      } ?>
       
      <p>
        <label for="<?php echo $this->get_field_id('day'); ?>"><?php _e('Day', 'wp_widget_plugin'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('day'); ?>" name="<?php echo $this->get_field_name('day'); ?>" type="text" value="<?php echo $day; ?>" />
      </p>

      <p>
        <label for="<?php echo $this->get_field_id('time'); ?>"><?php _e('Time (ex. 9:00 AM - 9:00 PM)', 'wp_widget_plugin'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('time'); ?>" name="<?php echo $this->get_field_name('time'); ?>" type="text" value="<?php echo $time; ?>" />
      </p>
      
    <?php }
  }
}
?>
  
  
  