<div class="single_related">
	<div class="relatedku">
		<div><h3>More Images :</h3></div>
	<?php //randompost
	query_posts(array('orderby' => 'rand', 'showposts' => 10));
	if (have_posts()) :
	while (have_posts()) : the_post(); ?>
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

	<?php endwhile;
	endif; ?>
	</div>
</div>