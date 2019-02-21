<?php get_header(); ?>
    <section id="artists" class="artists">
      <div class="container">
        <!-- <div class="d-flex flex-row text-center w-100">
          <div class="col-12 artist-logo">
            <img class="" src="/img/artists.png" alt="" />
          </div>
        </div> -->
        <div class="row justify-content-center">
          <!-- Team members -->
            <?php if(is_active_sidebar('artists')) : ?>
              <?php dynamic_sidebar('artists'); ?>
            <?php endif; ?>
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
            <div class="col-sm-12 mb-4 mt-4">
            <?= do_shortcode('[foogallery id="92"]'); ?>
            </div>
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
            <?php if(is_active_sidebar('workhours')) : ?>
              <?php dynamic_sidebar('workhours'); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <section class="contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 text-small-center">
            <?php if(is_active_sidebar('contact')) : ?>
              <?php dynamic_sidebar('contact'); ?>
            <?php endif; ?>
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
              <div class="col-sm-12">
              <?= do_shortcode('[contact-form-7 id="93" title="Contact form 1"]'); ?>
              </div>
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