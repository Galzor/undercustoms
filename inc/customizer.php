<?php
/**
 * undercustoms Theme Customizer
 *
 * @package undercustoms
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function undercustoms_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'undercustoms_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'undercustoms_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'undercustoms_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function undercustoms_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function undercustoms_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function undercustoms_customize_preview_js() {
	wp_enqueue_script( 'undercustoms-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'undercustoms_customize_preview_js' );




/**
 * Amanized customizer class for multiple select images.
 */
if (!class_exists('WP_Customize_Image_Control')) {
  return null;
}
class undercustoms_Multi_Image_Control extends WP_Customize_Control {
  public function enqueue() {
    wp_enqueue_style('undercustoms-customizer-style', get_template_directory_uri().'/css/customizer.css');
    wp_enqueue_script('undercustoms-customizer-script', get_template_directory_uri().'/js/customizer.js', array( 'jquery' ), rand(), true);
  }

  public function render_content() {
  	?>
      <h5 class='customize-control-title'>Add images to carousel</h5>
      <p>This is for front page only. You can choose multiple images. Click on image to remove it. Recommended Resolution is 1600x320.</p>
      <p>Image Order is reverse, that means last added image will be displayed first. </p>
      <div>
        <ul class='images'></ul>
      </div>
      <div class='actions'>
        <a class="button-secondary upload">Add Image</a>
      </div>
      <input class="wp-editor-area" id="images-input" type="hidden" <?php $this->link(); ?>>
    <?php
  }
}

/**
 * Amanized customizer option for darkcustoms
 */
function darkcustoms_customize_register_slides( $wp_customize ) {

  $wp_customize->add_panel( 'undercustoms_slider_panel', array(
    'priority'       => 50,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Homepage Carousel',
    'description'    => 'Handmade custom video slider by Amanz for his custom projects.',
  ));

  //slide 1
  $wp_customize->add_section( 'undercustoms_slider1' , array(
    'title'          => 'Slide 1',
    'priority'       => 101,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description'    => '',
    'panel'          => 'undercustoms_slider_panel',
  ));
  $wp_customize->add_setting('undercustoms_slider1_image',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo1', array(
    'label'      => 'Slide Background Image',
    'section'    => 'undercustoms_slider1',
    'settings'   => 'undercustoms_slider1_image',
    'context'    => 'undercustoms_slider1_context'
  )));
  $wp_customize->add_setting('undercustoms_slider1_caption',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control('undercustoms_slider1_caption',  array(
    'section'   => 'undercustoms_slider1',
    'label'     => 'Slide Caption',
    'type'      => 'textarea',
  ));

  //slide 2
  $wp_customize->add_section( 'undercustoms_slider2' , array(
    'title'          => 'Slide 2',
    'priority'       => 102,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description'    => '',
    'panel'          => 'undercustoms_slider_panel',
  ));
  $wp_customize->add_setting('undercustoms_slider2_image',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo2', array(
    'label'      => 'Slide Background Image',
    'section'    => 'undercustoms_slider2',
    'settings'   => 'undercustoms_slider2_image',
    'context'    => 'undercustoms_slider2_context'
  )));
  $wp_customize->add_setting('undercustoms_slider2_caption',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control('undercustoms_slider2_caption',  array(
    'section'   => 'undercustoms_slider2',
    'label'     => 'Slide Caption',
    'type'      => 'textarea',
  ));

  //slide 3
  $wp_customize->add_section( 'undercustoms_slider3' , array(
    'title'          => 'Slide 3',
    'priority'       => 103,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description'    => '',
    'panel'          => 'undercustoms_slider_panel',
  ));
  $wp_customize->add_setting('undercustoms_slider3_image',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo3', array(
    'label'      => 'Slide Background Image',
    'section'    => 'undercustoms_slider3',
    'settings'   => 'undercustoms_slider3_image',
    'context'    => 'undercustoms_slider3_context'
  )));
  $wp_customize->add_setting('undercustoms_slider3_caption',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control('undercustoms_slider3_caption',  array(
    'section'   => 'undercustoms_slider3',
    'label'     => 'Slide Caption',
    'type'      => 'textarea',
  ));

}
add_action( 'customize_register', 'darkcustoms_customize_register_slides' );