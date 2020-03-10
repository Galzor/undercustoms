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
  <link rel="icon" type="image/png" href="<?php echo get_site_icon_url( '512', get_stylesheet_directory_uri() . "/img/favicon.png", 0 ); ?>">

  <!-- extra stylesheets -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/tiny-slider.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.fancybox.min.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="site" class="site <?php echo (is_front_page() ? " frontpage " : " otherpage "); ?>">

    <header id="site-header" class="site-header">

      <div class="header-topbar d-none">
        <div class="container">
          <div class="row py-2">
            <div class="col-12 col-sm-6 col-md-8">
              <div class="contact-info d-inline-block">
                <?php $email_mod = ( !empty(get_theme_mod('undercustoms_contact_info_email')) ) ? get_theme_mod('undercustoms_contact_info_email') : 'youremail@mail.com' ; ?>
                <i class="fa fa-envelope"></i> <a href="mailto:<?php echo $email_mod; ?>"><?php echo $email_mod; ?></a>
              </div>
              <div class="contact-info d-none pl-4">
                <?php $phone_mod = ( !empty(get_theme_mod('undercustoms_contact_info_phone')) ) ? get_theme_mod('undercustoms_contact_info_phone') : '+1 123 456 7890' ; ?>
                <i class="fa fa-phone"></i> <a href="tel:<?php echo $phone_mod; ?>"><?php echo $phone_mod; ?></a>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-none d-md-block">
              <div class="social-menu text-right">
                <?php wp_nav_menu( array( 'theme_location' => 'menu-social', 'menu_class' => 'list-inline' ) ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="header-top">
        <div class="container">
          <div class="row py-2">

            <div class="col-12 col-sm-6 col-lg-3 order-0 order-lg-0 pr-0">
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

            <div class="col-12 col-sm-6 col-lg-2 order-1 order-lg-2">
              <div class="contact-info">
                <a class="btn btn-primary btn-sm" href="<?php echo site_url(); ?>/contact/"> <i class="fa fa-paper-plane"></i> Get a Quote </a>
                <span class="navbar-expand-lg navbar-dark"><button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#bs-navbar-primary" aria-controls="bs-navbar-primary" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button></span>
              </div>
            </div>

            <div class="col-12 col-lg-7 order-2 order-lg-1 px-0">
              <nav id="site-navigation" class="navbar navbar-expand-lg navbar-light p-0 pt-2" role="navigation">
                <div class="container">
                  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-navbar-primary" aria-controls="bs-navbar-primary" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> -->
                  <?php
                  wp_nav_menu(array(
                    'theme_location'    => 'menu-primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse justify-content-center',
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
        </div>
      </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
