<?php
/**
 * Template Name: Contact Us
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package undercustoms */
get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <div class="titlemon">
      <div class="title text-center">
        <h3 class="entry-title"> <?php the_title(); ?> </h3>
      </div>
    </div>

    <div class="content-block py-5">

      <section class="common-section contact-section py-3">
        <div class="container">
          <div class="card">
            <div class="card-body">
              <h4> Get in Touch </h4>
              <?php echo do_shortcode('[contact-form-7 id="478" title="Contact form 1"]'); ?>
            </div>
          </div>
        </div>
      </section>

      <!--Services-->
      <section class="common-section contact-section py-3">
        <div class="container">
          <div class="row">

            <div class="col-md-4">
              <div class="card text-center">
                <div class="card-body">
                  <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                  <h5 class="card-title mb-1 mt-2">Address</h5>
                  <?php $address_mod = ( !empty(get_theme_mod('undercustoms_contact_info_address')) ) ? get_theme_mod('undercustoms_contact_info_address') : 'Set Address in theme options' ; ?>
                  <p class="card-text"> <?php echo $address_mod; ?> </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center">
                <div class="card-body">
                  <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                  <h5 class="card-title mb-1 mt-2">Phone</h5>
                  <?php $phone_mod = ( !empty(get_theme_mod('undercustoms_contact_info_phone')) ) ? get_theme_mod('undercustoms_contact_info_phone') : 'Set Phone in theme options' ; ?>
                  <p class="card-text"> <a href="tel:<?php echo str_replace(' ', '', $phone_mod); ?>"><?php echo $phone_mod; ?></a> </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center">
                <div class="card-body">
                  <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                  <h5 class="card-title mb-1 mt-2">Email</h5>
                  <?php $email_mod = ( !empty(get_theme_mod('undercustoms_contact_info_email')) ) ? get_theme_mod('undercustoms_contact_info_email') : 'Set Email in theme options' ; ?>
                  <p class="card-text"> <a href="mailto:<?php echo $email_mod; ?>"><?php echo $email_mod; ?></a> </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

      <section class="common-section contact-section py-3">
        <div class="container">
          <div class="card card-body">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5132297.359442323!2d5.968357985600645!3d51.08992317063123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479a721ec2b1be6b%3A0x75e85d6b8e91e55b!2sGermany!5e0!3m2!1sen!2sin!4v1580692788039!5m2!1sen!2sin" frameborder="0" style="width: 100%; height: 400px; border:none; display:block;" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </section>

    </div>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
