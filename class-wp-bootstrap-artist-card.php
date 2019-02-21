<?php

if( ! class_exists('WP_Bootstrap_Artist_Card')){


  class WP_Bootstrap_Artist_Card extends WP_Widget {
    function WP_Bootstrap_Artist_Card() {
      // Instantiate the parent object
      parent::__construct(
                'wp_bootstrap_artist_card', // Base ID
                __('WP Bootstrap Artist Card', 'text_domain'), // Name
                array( 'description' => __( 'Widget for the artist cards below the landing page.', 'text_domain' ), ) // Args
      );
    }
  
    function widget( $args, $instance ) {
      echo $args['before_widget'];
        echo '<div class="image-flip" ontouchstart="this.classList.toggle(\'hover\');">';
          echo '<div class="mainflip">';
            echo '<div class="frontside">';
              echo '<div class="card">';
                echo '<div class="card-body text-center artist-1">';
                  echo '<div class="mt-5">';
                    echo '<h4 class="card-title">' . $instance['name'] . '</h4>';
                    echo '<p class="card-text">' . $instance['front_description'] . '</p>';                  
                    echo '<a href="#" class="btn btn-primary btn-sm mt-5">';
                      echo '<i class="fa fa-plus"></i>';
                    echo '</a>';
                  echo '</div>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
            echo '<div class="backside">';
              echo '<div class="card">';
                echo '<div class="card-body text-center mt-4">';
                echo '<h4 class="card-title">' . $instance['name'] . '</h4>';
                echo '<p class="card-text">' . $instance['back_description'] . '</p>';
                echo '<ul class="list-inline">';
                  echo '<li class="list-inline-item">';
                    echo '<a class="social-icon text-xs-center" target="_blank" href="#">';
                      echo '<i class="fab fa-facebook-f"></i>';
                    echo '</a>';
                  echo '</li>';
                echo '<li class="list-inline-item">';
                  echo '<a class="social-icon text-xs-center" target="_blank" href="#">';
                    echo '<i class="fab fa-twitter"></i>';
                      echo '</a>';
                    echo '</li>';
                  echo '</ul>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
    echo $args['after_widget'];
    }
  
    function update($new_instance, $old_instance) {
      $instance = $old_instance;
      // Fields
      $instance['name'] = strip_tags($new_instance['name']);
      $instance['front_description'] = strip_tags($new_instance['front_description']);
      $instance['back_description'] = strip_tags($new_instance['back_description']);
      return $instance;
    }
  
    // Widget form creation
    function form($instance) {
       $name = '';
      $frontdescription = '';
      $backdescription = '';
  
      // Check values
      if( $instance) {
        $name = esc_attr($instance['name']);
        $frontdescription = esc_textarea($instance['front_description']);
        $backdescription = esc_textarea($instance['back_description']);
      } ?>
       
      <p>
        <label for="<?php echo $this->get_field_id('name'); ?>"><?php _e('Name', 'wp_widget_plugin'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('name'); ?>" name="<?php echo $this->get_field_name('name'); ?>" type="text" value="<?php echo $name; ?>" />
      </p>

      <p>
        <label for="<?php echo $this->get_field_id('front_description'); ?>"><?php _e('Short Description', 'wp_widget_plugin'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('front_description'); ?>" name="<?php echo $this->get_field_name('front_description'); ?>" type="text" value="<?php echo $frontdescription; ?>" />
      </p>

      <p>
        <label for="<?php echo $this->get_field_id('back_description'); ?>"><?php _e('Large Description', 'wp_widget_plugin'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('back_description'); ?>" name="<?php echo $this->get_field_name('back_description'); ?>" type="text" value="<?php echo $backdescription; ?>" />
      </p>
      
    <?php }
  }
}
?>
  
  
  