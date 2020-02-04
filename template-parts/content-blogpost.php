<?php
/**
 * Template part for displaying blog posts in pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package undercustoms
 */
?>
<div class="row blogpost-item mb-3 bg-white">
  <div class="col-md-3 py-3">
    <div class="blogpost-thumb">
      <span class="first-category"><?php
      $categories = get_the_category();
      if ( ! empty( $categories ) ) {
        $cat_link = get_category_link( $categories[0]->term_id );
        $cat_name = $categories[0]->name;
        echo "<a href='$cat_link'>$cat_name</a>";
      }
      ?></span>

      <?php if ( has_post_thumbnail() ) { ?>
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      <?php } else { ?>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg" alt="" />
      <?php } ?>
      
    </div>    
  </div>
  <div class="col-md-9 py-3">
    <div class="blogpost-details">
      <!-- <h5> <?php //the_category( ', ' ); ?> </h5> -->
      <h5 class="dated"> <?php the_time('M j, Y') ?> </h5> 
      <h5 class="titled"> <a href="<?php the_permalink() ?>"><?php the_title(); ?></a> </h5>
      <div class="texted"><?php the_excerpt(); ?></div>
      <a class="btn btn-color btn-sm" href="<?php the_permalink() ?>">Read More</a>       
    </div>    
  </div>  
</div>