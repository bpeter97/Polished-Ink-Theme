<?php get_header(); ?>
    <section id="artists" class="artists">
      <div class="container pb-4">
        <!-- <div class="d-flex flex-row text-center w-100">
          <div class="col-12 artist-logo">
            <img class="" src="/img/artists.png" alt="" />
          </div>
        </div> -->
        <div class="row justify-content-center team-row">
          <!-- Team members -->
          <?php 
            $num_of_artists = get_theme_mod('artist_section_number_of_artists', 0);
            
            for ($x = 1; $x <= $num_of_artists; $x++) {
              echo '<div class="col team-wrap" style="max-width: 400px">';
                echo '<div class="team-member text-center">';
                  echo '<div class="team-img" style=";background: url('. get_theme_mod('artist_'.$x.'_image', get_bloginfo('template_url').'/img/emptyperson.png') .');background-size: cover;">';
                    echo '<div class="overlay-team">';
                      echo '<div class="team-details text-center">';
                        echo '<div class="socials mt-20">';
                        echo '<h5 class="team-title">'. get_theme_mod('artist_'.$x.'_name',"Full Name") .'</h5>';
                        echo '<h6>' . get_theme_mod('artist_'.$x.'_position',"Position") . '</h6>';
                        if(get_theme_mod('artist_'.$x.'_facebook') != "") {
                          echo '<a class="fb" href="'. get_theme_mod('artist_'.$x.'_facebook') .'">';
                            echo '<i class="fab fa-facebook"></i>';
                          echo '</a>';
                        }
                        if(get_theme_mod('artist_'.$x.'_twitter') != "") {
                          echo '<a class="twitter" href="'. get_theme_mod('artist_'.$x.'_twitter') .'">';
                            echo '<i class="fab fa-twitter"></i>';
                          echo '</a>';
                        }
                        if(get_theme_mod('artist_'.$x.'_instagram') != "") {
                          echo '<a class="instagram" href="'. get_theme_mod('artist_'.$x.'_instagram') .'">';
                            echo '<i class="fab fa-instagram"></i>';
                          echo '</a>';
                        }
                        if(get_theme_mod('artist_'.$x.'_email') != "") {
                          echo '<a class="email" href="mailto:'. get_theme_mod('artist_'.$x.'_email') .'">';
                            echo '<i class="fas fa-envelope"></i>';
                          echo '</a>';
                        }
                        echo '</div>';
                      echo '</div>';
                    echo '</div>';
                  echo '</div>';
                echo '</div>';
              echo '</div>';
            }
          ?>
          <!-- ./Team members -->
        </div>
      </div>
    </section>

    <section class="portfolio parallax-bg text-center" id="portfolio">
      <div class="container">
        <!-- <div class="d-flex flex-row text-center w-100">
          <div class="col-12 portfolio-logo">
            <img class="" src="/img/portfolio.png" alt="" />
          </div>
        </div> -->
        <div class="row">
          <div class="row">
          <?php if(is_active_sidebar('galleryshortcode')) : ?>
            <?php dynamic_sidebar('galleryshortcode'); ?>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="work-hours parallax-bg" id="work-hours">
      <div class="work-hours-content pt-0">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h1 class="d-none d-md-block display-2">Working Hours</h1>
              <h1 class="d-sm-block d-md-none display-5">Working Hours</h1>
            </div>
          </div>
          <div class="row mb-5 pb-3">
            <div class="col-12 text-center">
              <h1 class="d-none d-md-block display-4">
                Call us: (559) 564-2345
              </h1>
              <h3 class="d-sm-block d-md-none">
                Call us: (559) 564-2345
              </h3>
            </div>
          </div>
          <div class="row text-center">
          <?php 
            $num_of_days = get_theme_mod('num_of_days_worked', 0);

            for ($x = 1; $x <= $num_of_days; $x++) {
              echo '<div class="col day-container">';
                echo '<div class="row h-100 text-center justify-content-center">';
                  echo '<p class="col-12 mt-auto mb-auto day-text">'. get_theme_mod('day_'.$x.'_name') .'</p>';
                  echo '<p class="col-12 mt-auto mb-auto time-text">' . get_theme_mod('day_'.$x.'_time') . '</p>';
                echo '</div>';
              echo '</div>';
            }
          ?>
          </div>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <section class="contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 text-small-center">
            <div class="row pb-3">
              <div class="col-12">
                <img src="<?php echo get_template_directory_uri(); ?>/img/pi-logo.png" alt="" />
              </div>
            </div>
            <div class="row pb-3">
              <div class="col-12">
                <h2>Address</h2>
                <p class="mb-0"><?= get_theme_mod('shop_street_address') ?></p>
                <p class="mt-1"><?= get_theme_mod('shop_city_address') ?></p>
              </div>
            </div>
            <div class="row pb-3">
              <div class="col-12">
                <h2>Phone</h2>
                <p><?= get_theme_mod('shop_phone_number') ?></p>
              </div>
            </div>
            <div class="row pb-3">
              <div class="col-12">
                <h2>Email</h2>
                <p class="mb-0"><?= get_theme_mod('shop_email') ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div
                  class="fb-page"
                  data-href="https://www.facebook.com/tpitboss/"
                  data-width="300"
                  data-hide-cover="false"
                  data-show-facepile="false"
                ></div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="row text-center">
              <div class="col-12">
                <h2>Book Now</h2>
              </div>
            </div>
            <div class="row">
            <?php if(is_active_sidebar('contactshortcode')) : ?>
              <?php dynamic_sidebar('contactshortcode'); ?>
            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="google-map" id="google-map">
      <div class="container">
        <div class="d-flex flex-row">
          <div class="map-responsive">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3210.6975152361374!2d-119.09899608427274!3d36.41651308002946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809539b3306e0ed5%3A0x5387ea0875447c71!2spolished+ink!5e0!3m2!1sen!2sus!4v1550423659053"
              width="600"
              height="450"
              frameborder="0"
              style="border:0"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>