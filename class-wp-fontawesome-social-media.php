<?php

if( ! class_exists('WP_Fontawesome_Social_Media')){


  class WP_Fontawesome_Social_Media extends WP_Widget {
    function WP_Fontawesome_Social_Media() {
      // Instantiate the parent object
      parent::__construct(
                'wp_fontawesome_social_media', // Base ID
                __('WP Fontawesome Social Media', 'text_domain'), // Name
                array( 'description' => __( 'The links for the social media.', 'text_domain' ), ) // Args
      );
    }
  
    function widget( $args, $instance ) {
      echo $args['before_widget'];
        echo '<li class="list-inline-item social-facebook">';
          echo '<a href="'. $instance['facebook'] .'">';
            echo '<i class="fab fa-facebook-f"></i>';
          echo '</a>';
        echo '</li>';
      echo $args['after_widget'];
    }
  
    function update($new_instance, $old_instance) {
      $instance = $old_instance;
      // Fields
      $instance['facebook'] = strip_tags($new_instance['facebook']);
      return $instance;
    }
  
    // Widget form creation
    function form($instance) {
      $facebook = '';
  
      // Check values
      if( $instance) {
        $facebook = esc_attr($instance['facebook']);
      } ?>
       
      <p>
        <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook URL', 'wp_widget_plugin'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>" />
      </p>
      
    <?php }
  }
}
?>
  
  
  