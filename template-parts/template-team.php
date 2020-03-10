<?php
/**
 * Template Name: Team Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package undercustoms
 */
get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <div class="titlemon">
      <div class="title text-center">
        <h3 class="entry-title"> <?php the_title(); ?> </h3>
      </div>
    </div>

    <div class="content-block pt-5">

      <section class="common-section team-section">
        <div class="container">
          <div class="lead">
            <?php
              // TO SHOW THE PAGE CONTENTS
              while ( have_posts() ) : the_post();
                the_content();
              endwhile;
              wp_reset_query();
            ?>
          </div>
        </div>
      </section>

      <section class="common-section team-section bg-white border-top">
        <div class="container py-5">
          <div class="section-title text-center mb-5">
            <h2>Our Team</h2>
            <p>Know who we are, know our trainers </p>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.jpg" class="card-img-top" alt="">
                <div class="card-body text-center">
                  <h5 class="card-title mb-0">John Doe</h5>
                  <p class="card-text">Fitness Trainer</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.jpg" class="card-img-top" alt="">
                <div class="card-body text-center">
                  <h5 class="card-title mb-0">John Doe</h5>
                  <p class="card-text">Fitness Trainer</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.jpg" class="card-img-top" alt="">
                <div class="card-body text-center">
                  <h5 class="card-title mb-0">John Doe</h5>
                  <p class="card-text">Fitness Trainer</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.jpg" class="card-img-top" alt="">
                <div class="card-body text-center">
                  <h5 class="card-title mb-0">John Doe</h5>
                  <p class="card-text">Fitness Trainer</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- DISPLAY CALLTO SECTION -->
      <?php get_template_part('template-parts/content', 'callto-section'); ?>

    </div>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
