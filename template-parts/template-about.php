<?php
/**
 * Template Name: About Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package undercustoms
 */
get_header(); ?>

<div id="content" class="site-content full-width">
  <main id="primary" class="content-area main-inner userdiv">

    <div class="container-fluid titlemon" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/bluemon4.jpg');">
      <div class="title text-center">
        <h3 class="entry-title"> <?php the_title(); ?> </h3>
        <span class="line"></span>
      </div>
    </div>

    <!--About-->
    <section class="about-area section-padding" id="about">
      <div class="container">
        <div class="about-content">
          <div class="area-content">
            <p class="h5">CAV Advisory Services Private Limited is a company established in city beautiful,  by a group of professionals having vast experience in various streams. The conceptualization of the idea was conceived few years back where few inquiries from clients could not be resolved due to inadequacy of specialization. </p>
            <p class="h5">Looking at the same, the company came up with a new concept to deliver the services to the clients on single platform by experienced professionals in respective streams. The activity of the company is advisory in nature wherein Collective efforts of esteemed associates who believe in Outstanding quality and New ideas for rendering the services to the clients on Common platform with Extraordinary skill from Professionally qualified persons to perform in settled time framework. Our mission, commitment, core business and the people is CONCEPT where we mean and commit.</p>
          </div>      
        </div>
      </div>
    </section>

    <!--Services-->
    <section class="facilities-area section-padding" id="promotion">
      <div class="container">

        <div class="row">
          <div class="col-md-3">

            <div class="sidebar">
              <aside id="tertiary" class="widget-area">
                <div class="widget custom-widget-subpages">
                  <h3 class="widget-title text-uppercase"> Our Strengths </h3>
                  <p class="text-white"> Our strengths are our people, processes and professionalism. Well structured teams with domain specialization are guided by visionary leaders who possess expertise and experience and are present PAN India to ensure excellent client service. </p>
                </div>
              </aside>
            </div>

          </div>
          <div class="col-md-9">

            <div class="row">

              <div class="col-md-12 wow fadeInRight">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">TEAM DRIVEN PASSION FOR UNPARALLED SERVICES</h5>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>

              <div class="col-md-12 wow fadeInRight">
                <div class="card mb-4">            
                  <div class="card-body">
                    <h5 class="card-title">SIMPLIFICATION OF COMPLEX BUSINESS PROCESSES</h5>
                    <p class="card-text"></p>        
                  </div>
                </div>
              </div>

              <div class="col-md-12 wow fadeInRight">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">FINANCIAL STRATEGY FOR YOUR BUSINESS</h5>
                    <p class="card-text"></p>     
                  </div>
                </div>
              </div>

              <div class="col-md-12 wow fadeInRight">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">CORPORATE FINANCIAL DISTRESS &amp; BANKRUPCY</h5>
                    <p class="card-text"></p>         
                  </div>
                </div>
              </div>

              <div class="col-md-12 wow fadeInRight">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">RELIABLE INNOVATIVE BUSINESS CONSULTANTS IN NORTH INDIA</h5>
                    <p class="card-text"> </p>        
                  </div>
                </div>
              </div>

              <div class="col-md-12 wow fadeInRight">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">GROWTH PROSPECTUS</h5>
                    <p class="card-text"> </p>        
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
     
      </div>
    </section>

  </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>