<?php /*Template Name: Advance Related */ ?>

<?php
$mbuhopo = substr($post->post_title,0,100);
if(substr($mbuhopo,-1)==' ') 
{
$mbuhopo = substr($mbuhopo,0,-1);
}	
$page_num = $paged;
if ($pagenum='') $pagenum =1;
$mbuhopo = explode(' ',$mbuhopo);
$mbuhopo = $mbuhopo[0];
query_posts('&orderby=rand&showposts=12&s='.$mbuhopo.'&paged='.$page_num); ?>
<div>
<div class="relatedku">
    <div><h3 class="htree"> <?php the_title(); ?> Related : </h3></div>
                  <div> <?php if (have_posts()) : ?>
                       <?php while (have_posts()) : the_post(); ?>


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


                       <?php endwhile; ?>
                   <?php else : ?>
                   <div class="blog_post">
                       <h3><em>Sorry no results for "<span class="hasil"><?php ucwords(the_search_query()); ?></span>" returned to the <a href="<?php bloginfo('url'); ?>"><span class="kebo">home</span></a> or search more wallpapers</em></h3>
                   </div><!--//blog_post-->



    <?php endif; ?></div>
</div>
</div>
<div class="clear"></div>