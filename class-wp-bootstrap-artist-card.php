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
      echo '<div class="team-member text-center">';
        echo '<div class="team-img">';
          echo '<img src="'. get_bloginfo('template_url') .'/img/emptyperson.png" alt="">';
          echo '<div class="overlay-team">';
            echo '<div class="team-details text-center">';
              echo '<div class="socials mt-20">';
              echo '<h5 class="team-title">'. $instance['name'] .'</h5>';
              echo '<h6>' . $instance['position'] . '</h6>';
                echo '<a href="#">';
                  echo '<i class="fab fa-facebook"></i>';
                echo '</a>';
                echo '<a href="#">';
                  echo '<i class="fab fa-twitter"></i>';
                echo '</a>';
                echo '<a href="#">';
                  echo '<i class="fab fa-google-plus"></i>';
                echo '</a>';
                echo '<a href="#">';
                  echo '<i class="fab fa-envelope"></i>';
                echo '</a>';
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
      $instance['position'] = strip_tags($new_instance['position']);
      $instance['back_description'] = strip_tags($new_instance['back_description']);
      return $instance;
    }
  
    // Widget form creation
    function form($instance) {
       $name = '';
      $position = '';
      $backdescription = '';
  
      // Check values
      if( $instance) {
        $name = esc_attr($instance['name']);
        $position = esc_textarea($instance['position']);
        $backdescription = esc_textarea($instance['back_description']);
      } ?>
       
      <p>
        <label for="<?php echo $this->get_field_id('name'); ?>"><?php _e('Name', 'wp_widget_plugin'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('name'); ?>" name="<?php echo $this->get_field_name('name'); ?>" type="text" value="<?php echo $name; ?>" />
      </p>

      <p>
        <label for="<?php echo $this->get_field_id('position'); ?>"><?php _e('Position', 'wp_widget_plugin'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('position'); ?>" name="<?php echo $this->get_field_name('position'); ?>" type="text" value="<?php echo $position; ?>" />
      </p>

      <p>
        <label for="<?php echo $this->get_field_id('back_description'); ?>"><?php _e('Large Description', 'wp_widget_plugin'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('back_description'); ?>" name="<?php echo $this->get_field_name('back_description'); ?>" type="text" value="<?php echo $backdescription; ?>" />
      </p>
      
    <?php }
  }
}
?>
  
  
  