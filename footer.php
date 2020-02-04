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

        <div class="footer-logo text-center mb-5">
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
          <div class="col-lg-4 col-md-12">
            <h5 class="footer-title">Reach us</h5>
            <div class="footer-text">
              <p><i class="fa fa-map-marker"></i> #123, Sector 123B,<br> Cityname – 160022 </p>
              <p><i class="fa fa-phone"></i> <a href="tel:1234567890">1234567890</a></p>
              <p><i class="fa fa-envelope"></i> <a href="mailto:contact@company.com">contact@company.com</a></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6">
            <h5 class="footer-title">Browse</h5>
            <div class="footer-menu">
              <?php wp_nav_menu( array( 'theme_location' => 'menu-footer' ) ); ?>
            </div>
          </div>

          <div class="col-lg-2 col-md-6">
            <h5 class="footer-title">Follow</h5>
            <div class="footer-menu">
              <?php wp_nav_menu( array( 'theme_location' => 'menu-social' ) ); ?>
            </div>
          </div>

          <div class="col-lg-4 col-md-12">
            <h5 class="footer-title">Newsletter</h5>
            <div class="newsletter-form">
              <?php echo do_shortcode('[contact-form-7 id="18" title="Newsletter form"]'); ?>
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
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/rellax.min.js"></script>
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