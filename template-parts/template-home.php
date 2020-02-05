<?php

/**
 * Template Name: Home Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package undercustoms
 */
get_header(); ?>
<div class="homepage-content">

  <!--Slider -->
  <section class="main-slider" id="slideryx">
    <div class="slider-areax bg-slider">

      <div id="carouselundercustoms" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false" data-pause="false">

        <ol class="carousel-indicators">
          <li data-target="#carouselundercustoms" data-slide-to="0" class="active"></li>
          <li data-target="#carouselundercustoms" data-slide-to="1"></li>
          <li data-target="#carouselundercustoms" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

          <!-- for the slide -->
          <div class="carousel-item jumbo-slider active">
            <img src="<?php echo get_theme_mod('undercustoms_slider1_image'); ?>" alt="">
            <div class="carousel-caption">
              <?php echo get_theme_mod('undercustoms_slider1_caption'); ?>
            </div>
          </div>

          <!-- for the slide -->
          <div class="carousel-item jumbo-slider">
            <img src="<?php echo get_theme_mod('undercustoms_slider2_image'); ?>" alt="">
            <div class="carousel-caption">
              <?php echo get_theme_mod('undercustoms_slider2_caption'); ?>
            </div>
          </div>

          <!-- for the slide -->
          <div class="carousel-item jumbo-slider">
            <img src="<?php echo get_theme_mod('undercustoms_slider3_image'); ?>" alt="">
            <div class="carousel-caption">
              <?php echo get_theme_mod('undercustoms_slider3_caption'); ?>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#carouselundercustoms" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselundercustoms" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </section>

  <!--About-->
  <section class="about-area section-padding" id="about">
    <div class="container">

      <div class="about-content">
        <div class="area-title text-center mb-4">
          <h2>company SERVICES PVT. LTD.</h2>
          <p>One Stop Window for Business Advisory Services</p>
        </div>
        <div class="area-content">
          <?php
          // TO SHOW THE PAGE CONTENTS
          while (have_posts()) : the_post();
            the_content();
          endwhile;
          wp_reset_query();
          ?>
        </div>
        <img class="d-block mx-auto my-4 w-75" src="<?php echo get_stylesheet_directory_uri(); ?>/img/concept.png" alt="">
      </div>

    </div>
  </section>

  <!--Services-->
  <section class="facilities-area section-padding" id="promotion">
    <div class="container">

      <div class="card-deck services-deck">

        <div class="card">
          <div class="card-body">
            <div class="card-icon w-25 float-left">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon1.png" alt="">
            </div>
            <div class="card-parts w-75 float-left">
              <h5 class="card-title mb-1">Management <br> Consultancy</h5>
              <p class="card-text"> <strong><a href="<?php echo site_url(); ?>/services/management-consultancy/">Know More</a></strong> </p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="card-icon w-25 float-left">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon2.png" alt="">
            </div>
            <div class="card-parts w-75 float-left">
              <h5 class="card-title mb-1">ISO Certifications and Compliances</h5>
              <p class="card-text"> <strong><a href="<?php echo site_url(); ?>/services/iso-certifications-and-compliances/">Know More</a></strong> </p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="card-icon w-25 float-left">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon3.png" alt="">
            </div>
            <div class="card-parts w-75 float-left">
              <h5 class="card-title mb-1">Licensing, Compliances and Laisioning</h5>
              <p class="card-text"> <strong><a href="<?php echo site_url(); ?>/services/licensing-compliances-and-laisioning/">Know More</a></strong> </p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="card-icon w-25 float-left">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon4.png" alt="">
            </div>
            <div class="card-parts w-75 float-left">
              <h5 class="card-title mb-1">FEMA and RBI Compliances</h5>
              <p class="card-text"> <strong><a href="<?php echo site_url(); ?>/services/fema-and-rbi-compliances/">Know More</a></strong> </p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="card-icon w-25 float-left">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon5.png" alt="">
            </div>
            <div class="card-parts w-75 float-left">
              <h5 class="card-title mb-1">IPO for Companies and SEBI Compliances</h5>
              <p class="card-text"> <strong><a href="<?php echo site_url(); ?>/services/ipo-for-companies-and-sebi-compliances/">Know More</a></strong> </p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="card-icon w-25 float-left">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon6.png" alt="">
            </div>
            <div class="card-parts w-75 float-left">
              <h5 class="card-title mb-1">Risk management and Insurance</h5>
              <p class="card-text"> <strong><a href="<?php echo site_url(); ?>/services/risk-management-and-insurance/">Know More</a></strong> </p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!--Team-->
  <section class="team-area section-padding parallax-window" id="team" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonials-bg.jpg" data-speed="0.3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="area-title text-center">
            <h2>Our Team</h2>
            <p>Professionals with lots of Experience </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="owl-carousel owl-toppers">

            <div class="single-testmonial item">
              <a href="<?php echo site_url(); ?>/our-team/" title="">
                <div class="single-team-member fix text-center">
                  <div class="team-member-img ">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team1.jpg" alt="">
                  </div>
                  <div class="member-details">
                    <h6>Anil Chadda</h6>
                    <p>(FCA,DISA, B com)</p>
                    <div class="member-social-bookmark"> Exp: 30 years </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="single-testmonial item">
              <a href="<?php echo site_url(); ?>/our-team/" title="">
                <div class="single-team-member fix text-center">
                  <div class="team-member-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team2.jpg" alt="">
                  </div>
                  <div class="member-details">
                    <h6>Sandeep Kumar Rishi</h6>
                    <p>(Bsc, FCS, LLB)</p>
                    <div class="member-social-bookmark"> Exp: 25 years </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="single-testmonial item">
              <a href="<?php echo site_url(); ?>/our-team/" title="">
                <div class="single-team-member fix text-center">
                  <div class="team-member-img ">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team3.jpg" alt="">
                  </div>
                  <div class="member-details">
                    <h6>Ravinder Kumar Kakkar</h6>
                    <p>(B Tech, MBA)</p>
                    <div class="member-social-bookmark"> Exp: 18 years </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="single-testmonial item">
              <a href="<?php echo site_url(); ?>/our-team/" title="">
                <div class="single-team-member fix text-center">
                  <div class="team-member-img ">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team4.jpg" alt="">
                  </div>
                  <div class="member-details">
                    <h6>Anjana Vermani</h6>
                    <p>(Graduate in Home science)</p>
                    <div class="member-social-bookmark"> Exp: 17 years </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="single-testmonial item">
              <a href="<?php echo site_url(); ?>/our-team/" title="">
                <div class="single-team-member fix text-center">
                  <div class="team-member-img ">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team5.jpg" alt="">
                  </div>
                  <div class="member-details">
                    <h6>Vincy Chadda </h6>
                    <p>(FCA, B Com)</p>
                    <div class="member-social-bookmark"> Exp: 4 years </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="single-testmonial item">
              <a href="<?php echo site_url(); ?>/our-team/" title="">
                <div class="single-team-member fix text-center">
                  <div class="team-member-img ">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team6.jpg" alt="">
                  </div>
                  <div class="member-details">
                    <h6>Chandra Prakash Gupta</h6>
                    <p>(B.Sc., LL.B. & M.B.A [HR])</p>
                    <div class="member-social-bookmark"> Exp: 20 years </div>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>
      </div>

      <div class="text-center pt-1">
        <a class="btn btn-light" href="<?php echo site_url(); ?>/our-team/"> <strong>Know More</strong></a>
      </div>

    </div>
  </section>

  <!--BLOG AREA-->
  <section class="blog-area section-padding" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="area-title text-center">
            <h2>News &amp; Events</h2>
            <p>Latest Events at CAV</p>
          </div>
        </div>
      </div>

      <div class="row wow slideInUp">

        <div class="col-lg-8 col-md-8">
          <h3>Latest Posts</h3>
          <div class="holderx homeposts">
            <?php
            // TO SHOW THE PAGE CONTENTS
            $args = array(
              'posts_per_page' => 3,
              // 'category_name' => 'news',
              'orderby' => 'date',
              'order' => 'DESC'
            );
            query_posts($args);
            while (have_posts()) : the_post();
              get_template_part('template-parts/content', 'blogpost');
            endwhile;
            wp_reset_query();
            ?>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 brochure-box">
          <h3>Brochure</h3>
          <div class="youtube-embed">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brochure.jpg" alt="">
            <a class="btn btn-dark mt-3" href="<?php echo get_stylesheet_directory_uri(); ?>/files/brochure.pdf" title="download brochure"> <i class="fa fa-download"></i> Download Brochure</a>
          </div>
        </div>
      </div>

      <div class="text-left pt-1">
        <a class="btn btn-color" href="<?php echo site_url(); ?>/blog/"> <i class="fa fa-newspaper"></i> View More </a>
      </div>

    </div>
  </section>

  <!-- GALLERY FEED -->
  <section class="course-area section-padding parallax-window" id="galleri" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-bg.jpg" data-speed="0.3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="area-title text-center">
            <h2>Life at company</h2>
            <p>See all the fun we have here</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="owl-carousel owl-gallery">

            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img1.jpg" alt="">
            </div>
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img2.jpg" alt="">
            </div>
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img3.jpg" alt="">
            </div>
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img4.jpg" alt="">
            </div>
            <div class="item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img5.jpg" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="text-center pt-1">
        <a class="btn btn-light" href="<?php echo site_url(); ?>/gallery/"> <strong>View Gallery</strong></a>
      </div>

    </div>
  </section>

  <!--TESTMONIAL AREA-->
  <section class="testmonial-area gray-bg section-padding parallax-window" id="testimonials" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-bg.jpg" data-speed="0.3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="area-title text-center">
            <h2>Testimonials</h2>
            <p>What our clients says</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="owl-carousel owl-testimonials testmonial-slider">

            <div class="single-testmonial item">
              <div class="testmonial-author-details">
                <p>If you are aspiring for NET Mathematics, you will definetely be benefitted by joining company. Course Material was very good. Regular Tests went a long way in giving me confidence. The discussion sessions were very useful.</p>
              </div>
              <div class="member-image-and-title">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.png" alt="">
                <div class="member-title">
                  <h6>Bhavna</h6>
                  <p>Student</p>
                </div>
              </div>
            </div>

            <div class="single-testmonial item">
              <div class="testmonial-author-details">
                <p>I dedicate my success in to company, apart from teaching the comprehensive study material, assignments and regular tests and the discussion there of were helpful for me not only clearing.</p>
              </div>
              <div class="member-image-and-title">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.png" alt="">
                <div class="member-title">
                  <h6>Ankur</h6>
                  <p>Student</p>
                </div>
              </div>
            </div>

            <div class="single-testmonial item">
              <div class="testmonial-author-details">
                <p>Online Test Series of company helped me a lot in my preparation of CSIR NET. The MCQ’s of Test Series were of high standard and were well framed and well thought papers. Tests and their drafter solutions played a very crucial role.</p>
              </div>
              <div class="member-image-and-title">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.png" alt="">
                <div class="member-title">
                  <h6>Chawla</h6>
                  <p>Student</p>
                </div>
              </div>
            </div>

            <div class="single-testmonial item">
              <div class="testmonial-author-details">
                <p>Online Test Series of company helped me a lot in my preparation of CSIR NET. The MCQ’s of Test Series were of high standard and were well framed and well thought papers. Tests and their drafter solutions played a very crucial role.</p>
              </div>
              <div class="member-image-and-title">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.png" alt="">
                <div class="member-title">
                  <h6>Kapil</h6>
                  <p>Student</p>
                </div>
              </div>
            </div>

          </div>
          <div class="text-center pt-1">
            <a class="btn btn-color" href="<?php echo site_url(); ?>/contact/"> <strong>Contact</strong></a>
            <a class="btn btn-dark" href="<?php echo site_url(); ?>/careers/"> <strong>Careers</strong></a>
          </div>
        </div>
      </div>

    </div>
  </section>

</div>
<?php get_footer(); ?>