<?php get_header(); ?>

    <div id="content_left">
        <div class="single_content">

            <h1><?php the_title() ?></h1>
<div class="breadchumb">
            <?php include (TEMPLATEPATH . '/breadchumb.php'); ?>
</div>
            <!--

            Letak Iklan

            -->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="single_image">
                   <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
                    <?php endwhile; else: ?>
                        <h3>Sorry, no posts matched your criteria.</h3>
                    <?php endif; ?>
                    <?php setPostViews(get_the_ID()); ?>
                </div><!--//bigimages-->

            <div class="description_images">
                <h3> <?php the_title(); ?> Description :</h3>
                <!--

                Letak Iklan

                -->
                <p><strong><?php the_title(); ?></strong>, download this wallpaper for free in HD resolution.
                    <i><?php the_title(); ?></i> was posted in <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>.
                    This HD Wallpaper <u><?php the_title(); ?></u> has viewed by <?php setPostViews(get_the_ID()); ?><?php echo getPostViews(get_the_ID()); ?>
                    users.
                    If you wanna have it as yours, please click the wallpaper and you will go to page download, so you just  choose the size above the wallpaper that you want in "Download Size",
                    Click it and download the <?php the_title(); ?> wallpaper.</p>

                <p><strong><?php the_title(); ?></strong> one of the wallpapers that are included in <?php the_category(' '); ?> category and posted by <b>walluHD.com</b>

                <div class="clear"></div><!--//single_content-->
            </div>



    </div><!--//content_left-->
    </div>
    
    <?php get_sidebar(); ?>
    
    <div class="clear"></div>

<div class="single_related">
    <?php include (TEMPLATEPATH . '/advance-related.php'); ?>
</div>
<?php get_footer(); ?>    