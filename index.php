<?php get_header(); ?>
<!--

Letak Iklan

-->
<div>
<div class="full-content">
      <?php
      $args = array(
                   //'category_name' => 'blog',
                   'post_type' => 'post',
                   'posts_per_page' => 25,
                   'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                   );

      query_posts($args);

      while (have_posts()) : the_post(); ?>

<div>
              <div class="home_post_box" >
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                  <?php the_post_thumbnail('featured-home'); ?>
              </a>
              <!--<img src="<?php //bloginfo('stylesheet_directory'); ?>/images/home-big-image1.png" />-->
              <h2>
                  <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                  </a>
              </h2>
              <p><?php echo getPostViews(get_the_ID()); ?> Views</p>
          </div><!--//home_post_box-->
</div>

      

      <?php endwhile; ?>

</div>
</div>
<div class="clear"></div>

<!--

Letak Iklan

-->
    <?php include (TEMPLATEPATH . '/nav.php'); ?>

<div class="clear"></div>
      <?php wp_reset_query(); ?>      
    
<?php get_footer(); ?>  