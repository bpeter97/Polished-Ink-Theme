<?php

if( ! class_exists('WP_Shortcode_Input')){


  class WP_Shortcode_Input extends WP_Widget {
    function WP_Shortcode_Input() {
      // Instantiate the parent object
      parent::__construct(
                'wp_shortcode_input', // Base ID
                __('WP Shortcode Input', 'text_domain'), // Name
                array( 'description' => __( 'This is an option to insert shortcode', 'text_domain' ), ) // Args
      );
    }
  
    function widget( $args, $instance ) {
      echo $args['before_widget'];
        echo do_shortcode($instance['shortcode']);
      echo $args['after_widget'];
    }
  
    function update($new_instance, $old_instance) {
      $instance = $old_instance;
      // Fields
      $instance['shortcode'] = strip_tags($new_instance['shortcode']);
      return $instance;
    }
  
    // Widget form creation
    function form($instance) {
      $shortcode = '';
  
      // Check values
      if( $instance) {
        $shortcode = esc_attr($instance['shortcode']);
      } ?>
       
      <p>
        <label for="<?php echo $this->get_field_id('shortcode'); ?>"><?php _e('Shortcode', 'wp_widget_plugin'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('shortcode'); ?>" name="<?php echo $this->get_field_name('shortcode'); ?>" type="text" value="<?php echo $shortcode; ?>" />
      </p>
      
    <?php }
  }
}
?>
  
  
  