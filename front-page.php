<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package undercustoms
 */

get_header();
?>

<div id="frontpage" class="frontpage-area">

  <section class="hero-section">
    <div class="hero-slider">
      <div id="carouselundercustoms" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000" data-pause="false">

        <ol class="carousel-indicators">
          <li data-target="#carouselundercustoms" data-slide-to="0" class="active"></li>
          <li data-target="#carouselundercustoms" data-slide-to="1"></li>
          <li data-target="#carouselundercustoms" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

          <!-- for the slide -->
          <div class="carousel-item jumbo-slider active">
            <img src="<?php echo ( !empty(get_theme_mod('undercustoms_slider1_image')) ) ? get_theme_mod('undercustoms_slider1_image') : get_template_directory_uri().'/img/default.jpg' ; ?>" alt="">
            <div class="carousel-caption">
              <?php echo get_theme_mod('undercustoms_slider1_caption'); ?>
              <!--
              <h4>Sub Heading</h4>
              <h2>Main Heading</h2>
              <p>A small paragraph as complimentory text</p>
              <a href="#" class="btn">Know More</a>
              -->
            </div>
          </div>

          <!-- for the slide -->
          <div class="carousel-item jumbo-slider">
            <img src="<?php echo ( !empty(get_theme_mod('undercustoms_slider2_image')) ) ? get_theme_mod('undercustoms_slider2_image') : get_template_directory_uri().'/img/default.jpg' ; ?>" alt="">
            <div class="carousel-caption">
              <?php echo get_theme_mod('undercustoms_slider2_caption'); ?>
            </div>
          </div>

          <!-- for the slide -->
          <div class="carousel-item jumbo-slider">
            <img src="<?php echo ( !empty(get_theme_mod('undercustoms_slider3_image')) ) ? get_theme_mod('undercustoms_slider3_image') : get_template_directory_uri().'/img/default.jpg' ; ?>" alt="">
            <div class="carousel-caption">
              <?php echo get_theme_mod('undercustoms_slider3_caption'); ?>
            </div>
          </div>

        </div>

        <div class="carousel-controls">
          <a class="carousel-control-prev" href="#carouselundercustoms" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselundercustoms" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <!-- <div class="carousel-overlay"> </div> -->

      </div>
    </div>
  </section>

  <section id="about" class="common-section about-section bg-white">
    <div class="container py-5">
      <div class="section-title text-center mb-5">
        <h2>About me</h2>
        <p>content under construction</p>
      </div>
      <div class="row">

        <div class="col-md-7">
          <div class="section-content pr-md-5">
            <?php
            // TO SHOW THE PAGE CONTENTS
            while (have_posts()) : the_post();
              the_content();
            endwhile;
            wp_reset_query();
            ?>
          </div>
        </div>

        <div class="col-md-5">
          <a data-fancybox href="https://www.youtube.com/watch?v=AR2IZGYqxaY">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-video.jpg">
          </a>
        </div>

      </div>
    </div>
  </section>

  <section class="common-section gallery-section border-top">
    <div class="container py-5">

      <div class="section-title text-center mb-5">
        <h2>Our Services</h2>
        <p>content under construction</p>
      </div>

      <div class="row">

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="card-icon w-25 float-left text-center">
                <i class="fa fa-2x fa-award text-color"></i>
              </div>
              <div class="card-parts w-75 float-left">
                <h5 class="card-title mb-1"> Management <br> Service </h5>
                <p class="card-text text-muted"> Lorem ipsum dolor sit, amet consectetur adipisicing elit Eius. <a href="<?php echo site_url(); ?>/services/"><small><strong>Read More</strong></small></a> </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="card-icon w-25 float-left text-center">
                <i class="fa fa-2x fa-laptop-code text-color"></i>
              </div>
              <div class="card-parts w-75 float-left">
                <h5 class="card-title mb-1"> Development <br> Service </h5>
                <p class="card-text text-muted"> Lorem ipsum dolor sit, amet consectetur adipisicing elit Eius. <a href="<?php echo site_url(); ?>/services/"><small><strong>Read More</strong></small></a> </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="card-icon w-25 float-left text-center">
                <i class="fa fa-2x fa-air-freshener text-color"></i>
              </div>
              <div class="card-parts w-75 float-left">
                <h5 class="card-title mb-1"> Designing <br> Service </h5>
                <p class="card-text text-muted"> Lorem ipsum dolor sit, amet consectetur adipisicing elit Eius. <a href="<?php echo site_url(); ?>/services/"><small><strong>Read More</strong></small></a> </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="card-icon w-25 float-left text-center">
                <i class="fa fa-2x fa-cat text-color"></i>
              </div>
              <div class="card-parts w-75 float-left">
                <h5 class="card-title mb-1"> Animation <br> Service </h5>
                <p class="card-text text-muted"> Lorem ipsum dolor sit, amet consectetur adipisicing elit Eius. <a href="<?php echo site_url(); ?>/services/"><small><strong>Read More</strong></small></a> </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="card-icon w-25 float-left text-center">
                <i class="fa fa-2x fa-business-time text-color"></i>
              </div>
              <div class="card-parts w-75 float-left">
                <h5 class="card-title mb-1"> Programming <br> Service </h5>
                <p class="card-text text-muted"> Lorem ipsum dolor sit, amet consectetur adipisicing elit Eius. <a href="<?php echo site_url(); ?>/services/"><small><strong>Read More</strong></small></a> </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="card-icon w-25 float-left text-center">
                <i class="fa fa-2x fa-biohazard text-color"></i>
              </div>
              <div class="card-parts w-75 float-left">
                <h5 class="card-title mb-1"> Dangerous <br> Service </h5>
                <p class="card-text text-muted"> Lorem ipsum dolor sit, amet consectetur adipisicing elit Eius. <a href="<?php echo site_url(); ?>/services/"><small><strong>Read More</strong></small></a> </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="common-section team-section">
    <div class="parallax-box">
      <img class="parallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-bg.jpg">
    </div>
    <div class="container py-5">
      <div class="section-title text-center mb-5 text-white">
        <h2>Recent Blog</h2>
        <p>Check out our most recent blogs! </p>
      </div>

      <div class="blog-posts">
        <div class="row">
          <?php
          // TO SHOW THE PAGE CONTENTS
          $args = array(
            'posts_per_page' => 3,
            // 'category_name' => 'uncategorized',
            'orderby' => 'date',
            'order' => 'DESC'
          );
          query_posts($args);
          while (have_posts()) : the_post();
            ?>
            <div class="col-md-4">
              <?php
              get_template_part('template-parts/content', 'item');
              ?>
            </div>
            <?php
          endwhile;
          wp_reset_query();
          ?>
        </div>
      </div>

      <!-- <div class="text-center py-4">
        <div class="tiny-slider tiny-silder-quadra">

          <div class="tiny-item">
            <div class="card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example.</p>
              </div>
            </div>
          </div>

          <div class="tiny-item">
            <div class="card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example.</p>
              </div>
            </div>
          </div>

          <div class="tiny-item">
            <div class="card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example.</p>
              </div>
            </div>
          </div>

          <div class="tiny-item">
            <div class="card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example.</p>
              </div>
            </div>
          </div>

          <div class="tiny-item">
            <div class="card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example.</p>
              </div>
            </div>
          </div>

        </div>
      </div> -->

      <div class="text-center pt-5">
        <a class="btn btn-light btn-lg" href="<?php echo site_url(); ?>/blog/"> <i class="fa fa-newspaper"></i> View Blog </a>
      </div>
    </div>
  </section>

  <section class="common-section blog-section border-top">
    <div class="container pt-5">
      <div class="section-title text-center mb-5">
        <h2>Exercises</h2>
        <p>Check out our most recent blogs from Exercises Category! </p>
      </div>

      <div class="blog-posts">
        <div class="row">
          <?php
          // TO SHOW THE PAGE CONTENTS
          $args = array(
            'posts_per_page' => 3,
            'category_name' => 'exercises',
            'orderby' => 'date',
            'order' => 'DESC'
          );
          query_posts($args);
          while (have_posts()) : the_post();
            ?>
            <div class="col-md-4">
              <?php
              get_template_part('template-parts/content', 'item');
              ?>
            </div>
            <?php
          endwhile;
          wp_reset_query();
          ?>
        </div>
      </div>

      <div class="text-center pt-4">
        <a class="btn btn-primary" href="<?php echo site_url(); ?>/category/exercises/"> <i class="fa fa-newspaper"></i> View More </a>
      </div>

    </div>
  </section>

  <section class="common-section gallery-section bg-white border-top">
    <div class="container-fluid">
      <div class="section-title text-center mb-5">
        <h2>The Fitness Life</h2>
        <p>See all the fun we can have here</p>
      </div>

      <div class="text-center py-4">
        <div class="tiny-slider tiny-slider-center">

          <div class="tiny-item">
            <a data-fancybox="gallery" href="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img1.jpg">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img1.jpg" alt="">
            </a>
          </div>

          <div class="tiny-item">
            <a data-fancybox="gallery" href="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img2.jpg">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img2.jpg" alt="">
            </a>
          </div>

          <div class="tiny-item">
            <a data-fancybox="gallery" href="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img3.jpg">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img3.jpg" alt="">
            </a>
          </div>

          <div class="tiny-item">
            <a data-fancybox="gallery" href="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img4.jpg">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img4.jpg" alt="">
            </a>
          </div>

          <div class="tiny-item">
            <a data-fancybox="gallery" href="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img5.jpg">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img5.jpg" alt="">
            </a>
          </div>

        </div>
      </div>

      <!-- <div class="text-center pt-1">
        <a class="btn btn-primary" href="<?php echo site_url(); ?>/gallery/"> <strong>View Gallery</strong></a>
      </div> -->

    </div>
  </section>

  <section class="common-section testmonials-section">
    <div class="parallax-box">
      <img class="parallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonials-bg.jpg">
    </div>

    <div class="container py-5">

      <div class="section-title text-center mb-5 text-white">
        <h2>Testimonials</h2>
        <p>Read our humble clients say!</p>
      </div>

      <div class="testimonial-slider">
        <div class="bd-example">
          <div id="carouselTestimonials" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- <ol class="carousel-indicators">
              <li data-target="#carouselTestimonials" data-slide-to="0" class="active"></li>
              <li data-target="#carouselTestimonials" data-slide-to="1"></li>
              <li data-target="#carouselTestimonials" data-slide-to="2"></li>
            </ol> -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="testimonial-item">
                  <p>it's a shame to grow old without seeing what manner of man we may become when we develop our mind and body to their limits. </p>
                  <h5>John Doe</h5>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-item">
                  <p>I live by this Ancient Greek wisdom. Education and physical training are the pillars of my life. I tried to ignore it and follow a more traditional career path as a business consultant. </p>
                  <h5>Jane Doe</h5>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-item">
                  <p>The best decision of my life was trading my luxury time to follow my passion in fitness. It wasn't for me. </p>
                  <h5>John Doe</h5>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselTestimonials" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselTestimonials" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

    </div>
  </section>

</div>

<?php
get_footer();
