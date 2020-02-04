<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package undercustoms
 */

?>
  </div><!-- #content -->

  <!-- footer -->
  <footer id="site-footer" class="site-footer">
    <div class="footer-top py-5">
      <div class="container">

        <div class="footer-logo text-center mb-4 mb-lg-5">
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
        </div>

        <div class="row">
          <div class="col-lg-5 col-md-12">
            <h5 class="footer-title mt-5 mt-lg-0">About</h5>
            <div class="footer-text pr-5">
              <p>Blog & Articles on how to build muscle, lose fat and get stronger. Your source for Best fitness content.</p>
            </div>
            <div class="social-menu">
              <?php wp_nav_menu( array( 'theme_location' => 'menu-social', 'menu_class' => 'list-inline' ) ); ?>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <h5 class="footer-title mt-5 mt-lg-0">Browse</h5>
            <div class="footer-menu">
              <?php wp_nav_menu( array( 'theme_location' => 'menu-footer', 'menu_class' => 'list-unstyled' ) ); ?>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 pl-md-5">
            <h5 class="footer-title mt-5 mt-lg-0">Newsletter</h5>
            <div class="newsletter-form">
              <?php echo do_shortcode('[contact-form-7 id="536" title="Newsletter form"]'); ?>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 d-none">
            <h5 class="footer-title mt-5 mt-lg-0">Reach us</h5>
            <div class="footer-text">
              <?php $phone_mod = ( !empty(get_theme_mod('undercustoms_contact_info_phone')) ) ? get_theme_mod('undercustoms_contact_info_phone') : '+1 123 456 7890' ; ?>
              <p class="mb-1"><i class="fa fa-phone"></i> <a href="tel:<?php echo $phone_mod; ?>"><?php echo $phone_mod; ?></a></p>
              <?php $email_mod = ( !empty(get_theme_mod('undercustoms_contact_info_email')) ) ? get_theme_mod('undercustoms_contact_info_email') : 'youremail@mail.com' ; ?>
              <p class="mb-1"><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $email_mod; ?>"><?php echo $email_mod; ?></a></p>
              <?php $address_mod = ( !empty(get_theme_mod('undercustoms_contact_info_address')) ) ? get_theme_mod('undercustoms_contact_info_address') : 'Address Line, Country' ; ?>
              <p class="mb-1"><i class="fa fa-map-marker"></i> <?php echo $address_mod; ?> </p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row">

          <div class="col-md-12">
            <div class="copyrights-text">
              <p class="text-muted text-center py-3 m-0">
                &copy; 2020 <?php bloginfo('name'); ?>, All Rights Reserved.
                <span class="sep"> | </span>
                Handcrafted by <a href="http://galzor.com" target="_blank">Amanz</a>
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>

  </footer>

</div> <!-- #site -->

<!-- back to top -->
<div class="back-to-top"> <i class="fa fa-chevron-up"></i> </div>

<!-- Final Scripts -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/simpleParallax.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/tiny-slider.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/wow.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.fancybox.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/fontawesome.all.min.js" async></script>

<script>
$(document).ready(function() {
  // console.log('footer js initilized.');


});
</script>

<?php wp_footer(); ?>
</body>
</html>