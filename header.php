<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="author" content="Brian L. Peter Jr." />

    <title><?php bloginfo('title'); ?> | <?php bloginfo('description'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom fonts for this template -->
    <link href="<?php bloginfo('template_url'); ?>/css/all.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="<?php bloginfo('template_url'); ?>/css/simple-line-icons.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lato"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Muli"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
    <?php wp_head(); ?>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top <?= is_user_logged_in() ? 'mt-4 pt-3' : '' ?>" id="mainNav">
      <div class="container">
        <div class="d-sm-block d-md-none">
          <a class="navbar-brand nav-link m-0 w-50" href="#page-top"
            ><img
              class="header-logo"
              width="200px"
              src="<?php bloginfo('template_url'); ?>/img/pi-logo.png"
              alt="Polished Ink Logo"
          /></a>
        </div>

        <div class="d-none d-md-block">
          <a class="navbar-brand nav-link" href="#page-top"
            ><img
              class="header-logo"
              src="<?php bloginfo('template_url'); ?>/img/pi-logo.png"
              alt="Polished Ink Logo"
          /></a>
        </div>

        <button
          class="navbar-toggler mr-4"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
        <?php
          wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'bs-example-navbar-collapse-1',
            'menu_class'      => 'navbar-nav ml-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ));
        ?>
      </div>
    </nav>

    <header class="masthead parallax-bg">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-12 my-auto">
            <div class="header-content mx-auto text-center">
              <h1 class="mb-5 header-landing-text">
              <?php if(is_active_sidebar('mainmessage')) : ?>
                <?php dynamic_sidebar('mainmessage'); ?>
              <?php endif; ?>
              </h1>
              <a
                href="#contact"
                class="btn btn-outline btn-xl-book nav-link"
                >Book now</a
              >
              <a
                href="#portfolio"
                class="btn btn-outline btn-xl nav-link"
                >Portfolio</a
              >
              <div class="header-scroll-down-button mx-auto text-center">
                <a href="#artists" class="btn-scroll-arrow nav-link"
                  ><i class="fas fa-angle-double-down"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
