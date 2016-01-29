<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="utf-8">
<?php include (TEMPLATEPATH . '/meta.php'); ?>



<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  


<?php wp_head(); ?>
</head>
<body>

<div id="full_container">
<div id="main_container">

    <div id="header">
        <div class="brand">
           <a href="<?php bloginfo('url'); ?>">
               <h1><?php bloginfo('name'); ?></h1>
           </a>
        </div>
        <!--
        <ul>
          <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
          <li><a href="#">Popular</a></li>
          <li><a href="http://localhost/wptheme/random/">Random</a></li>
            <li><a href="#">Blog</a></li>

        </ul>
          -->

        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
            <input type="text" value="Search" name="s" id="s" onclick="if(this.value == 'Search') this.value='';" onblur="if(this.value == '') this.value='Search';" />
        </form>
        <div class="clear"></div>
    </div><!--//header-->

    <!--
    <div id="menu_container">
    <!--
        <ul>
          <li><a href="#">PORTRAIT</a></li>
          <li><a href="#">PEOPLE</a></li>
          <li><a href="#">LANDSCAPE</a></li>
          <li><a href="#">ARCHITECTURE</a></li>
          <li><a href="#">STILLS</a></li>
          <li><a href="#">OTHERS</a></li>
        </ul>-->

       <!-- <div class="clear"></div>
    </div><!--//menu_container-->


    <div class="featured_text">
        <!-- Fitur text -->
    </div>
