<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package web2feel
 * @since web2feel 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'web2feel' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header cf" role="banner">
	
	<div class="top">
		
			<div class="logo">
				<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
				
			<?php wp_nav_menu( array( 'container_id' => 'submenu','container_class' => 'cf', 'theme_location' => 'primary','menu_id'=>'web2feel' ,'menu_class'=>'sfmenu sf-vertical','fallback_cb'=> 'fallbackmenu' ) ); ?>
		
			<div class="social-links">
				<ul>
					<li class="twitter"> <a href="http://twitter.com/<?php echo of_get_option('w2f_twitter');  ?>"></a> </li>
					<li class="facebook"> <a href="<?php echo of_get_option('w2f_facebook');  ?>"></a> </li>
					<li class="gplus"> <a href="<?php echo of_get_option('w2f_gplus');  ?>"></a> </li>
					<li class="in"> <a href="<?php echo of_get_option('w2f_linkedin');  ?>"></a> </li>
					<li class="feed"> <a href="<?php bloginfo('rss2_url'); ?>"></a> </li>
				</ul>
			</div>
			
		</div>
		
	</header><!-- #masthead .site-header -->

