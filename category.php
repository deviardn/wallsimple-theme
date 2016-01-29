<?php get_header(); ?>

        <?php if (have_posts()) : ?>

        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

        <?php $x = 0; ?>
        <?php while (have_posts()) : the_post(); ?>

<div><div class="home_post_box">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-home'); ?></a>
              <!--<img src="<?php //bloginfo('stylesheet_directory'); ?>/images/home-big-image1.png" />-->
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php echo getPostViews(get_the_ID()); ?> Views</p>
</div></div>
          

      
      <?php $x++; ?>
        <?php endwhile; ?>



            <?php else :
    
                    if ( is_category() ) { // If this is a category archive
                            printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
                    } else if ( is_date() ) { // If this is a date archive
                            echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
                    } else if ( is_author() ) { // If this is a category archive
                            $userdata = get_userdatabylogin(get_query_var('author_name'));
                            printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
                    } else {
                            echo("<h2 class='center'>No posts found.</h2>");
                    }
                    get_search_form();
            endif; ?>




<?php include (TEMPLATEPATH . '/nav.php'); ?>
      
      <?php wp_reset_query(); ?>      
    
<?php get_footer(); ?>    