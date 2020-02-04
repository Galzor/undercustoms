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
get_header(); ?>

<div id="content" class="site-content">
  <main id="primary" class="content-area">
    <div class="contact-page">

      <div class="container-fluid titlemon" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/bluemon2.jpg');">
        <div class="title text-center">
          <h3 class="entry-title"> <?php the_title(); ?> </h3>
          <span class="line"></span>
        </div>
      </div>

      <!--Services-->
      <section class="facilities-area p-0 mt-5">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card text-center">
                <div class="card-body">
                  <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/address.png" alt="">
                  <h5 class="card-title mb-1 mt-2">Address</h5>
                  <p class="card-text"> <a href="https://goo.gl/maps/dnfTTvsBEov" target="_blank">#1685, Sector 22B,<br> Chandigarh – 160022 </a></p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center">
                <div class="card-body">
                  <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/phone.png" alt="">
                  <h5 class="card-title mb-1 mt-2">Phone</h5>
                  <p class="card-text"> <a href="tel:+911724191685">+91 172 4191685</a><br><br> </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center">
                <div class="card-body">
                  <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/mail.png" alt="">
                  <h5 class="card-title mb-1 mt-2">Email</h5>
                  <p class="card-text"> <a href="mailto:contact@cavadvisory.com">contact@cavadvisory.com</a> <br><br></p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

      <!--About-->
      <section class="about-area pt-4">
        <div class="container">
          <div class="card">
            <div class="card-body">
              <h4> Get in Touch </h4>
              <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]'); ?>
            </div>
          </div>
        </div>
      </section>

      <!--Map-->
      <section class="facilities-area">
        <div class="container">
          <div class="card card-body">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3429.5432062716623!2d76.77692241545866!3d30.73123968163774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed8477ababff%3A0x1efb3621662aad25!2sCAV+Advisory+Services!5e0!3m2!1sen!2sin!4v1550051340216" frameborder="0" style="width: 100%; height: 400px; border:none; display:block;" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </section>

    </div>
  </main>
</div>

<?php get_footer(); ?>