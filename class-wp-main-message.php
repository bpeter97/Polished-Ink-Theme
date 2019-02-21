<?php

if( ! class_exists('WP_Main_Message')){


  class WP_Main_Message extends WP_Widget {
    function WP_Main_Message() {
      // Instantiate the parent object
      parent::__construct(
                'wp_main_message', // Base ID
                __('WP Main Message', 'text_domain'), // Name
                array( 'description' => __( 'The message displayed on the landing page.', 'text_domain' ), ) // Args
      );
    }
  
    function widget( $args, $instance ) {
      echo $args['before_widget'];
      echo $instance['message'];
      echo $args['after_widget'];
    }
  
    function update($new_instance, $old_instance) {
      $instance = $old_instance;
      // Fields
      $instance['message'] = strip_tags($new_instance['message']);
      return $instance;
    }
  
    // Widget form creation
    function form($instance) {
      $message = '';
  
      // Check values
      if( $instance) {
        $message = esc_attr($instance['message']);
      } ?>
       
      <p>
        <label for="<?php echo $this->get_field_id('message'); ?>"><?php _e('Message', 'wp_widget_plugin'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('message'); ?>" name="<?php echo $this->get_field_name('message'); ?>" type="text" value="<?php echo $message; ?>" />
      </p>
      
    <?php }
  }
}
?>
  
  
  