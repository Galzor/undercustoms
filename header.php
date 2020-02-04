<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package undercustoms
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- favicon -->
  <?php
  if (has_site_icon()) :
    $favicon_img = esc_url(get_site_icon_url());
  else :
    $favicon_img = get_stylesheet_directory_uri() . "/img/favicon.png?v=1";
  endif;
  ?>
  <link rel="icon" type="image/png" href="<?php echo $logo_img; ?>">

  <!-- extra stylesheets -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/tiny-slider.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="site" class="site <?php echo (is_front_page() ? " frontpage " : " otherpage "); ?>">

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <header id="site-header" class="site-header">

      <div class="header-branding">
        <div class="container">
          <div class="row py-2">

            <div class="col-12 col-lg-4">
              <div class="site-branding">
                <?php
                if (has_custom_logo()) :
                  $logo_img = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
                  $logo_img = $logo_img[0];
                else :
                  $logo_img = get_stylesheet_directory_uri() . "/img/logo.png";
                endif;
                ?>
                <a class="logo" href="<?php echo site_url(); ?>">
                  <img src="<?php echo $logo_img; ?>" alt="">
                </a>
                <!-- <h2 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h2> -->
                <!-- <p class="site-tagline"><?php echo get_bloginfo('description', 'display'); ?></p> -->
              </div><!-- .site-branding -->
            </div>

            <div class="col-12 col-lg-4">
              <form class="search-form mt-4" action="/" method="get">
                <input type="search" name="s" id="search" value="" placeholder="search..." />
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </div>

            <div class="col-12 col-lg-4">
              <div class="row">
                <div class="col-4 text-right">

                </div>
                <div class="col-8">

                </div>
              </div>
              <div class="text-right mt-4">
                <span><i class="fa fa-phone"></i> <a href="tel:+1234567890">+1 123 456 7890</a></span><br>
                <span><i class="fa fa-envelope"></i> <a href="mailto:mail@yourwebsite.com">mail@yourwebsite.com</a></span>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="header-navigation">
        <div class="container">
          <nav id="site-navigation" class="navbar navbar-expand-md navbar-dark" role="navigation">
            <div class="container">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-navbar-primary" aria-controls="bs-navbar-primary" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
              <?php
              wp_nav_menu(array(
                'theme_location'    => 'menu-primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-navbar-primary',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
              ));
              ?>
            </div>
          </nav><!-- #site-navigation -->
        </div>
      </div>

    </header><!-- #masthead -->

    <div id="content" class="site-content">
