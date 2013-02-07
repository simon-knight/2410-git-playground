<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>Simon Knight - Freelance Web Designer in Leeds</title>
<link rel="icon" type="image/ico" href="http://www.simonknight.co.uk/favicon.ico"/>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Signika|Pacifico:300,400,600' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>

<!--[if IE 9]>
    <link rel="stylesheet" type="text/css" href="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/ie9.css"> 
<![endif]-->
<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/ie8.css">
<![endif]-->
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/ie7.css">
<![endif]-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="http://www.simonknight.co.uk/wp-content/themes/simonknight-theme/js/myjquery.js">
</script>
<script type="text/javascript">
jQuery(document).ready(function(){

	/* prepend menu icon */
	jQuery('#nav_bar').prepend('<div id="menu-icon"></div>');
	/* toggle nav */
	jQuery("#menu-icon").on("click", function(){
		jQuery("#menu-main-nav").slideToggle();
		jQuery(this).toggleClass("active");
	});

});
</script>



</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
	
	<div class="grid-wrapper">
		<div class="grid one-whole lap-five-twelfths desk-five-twelfths">
		<hgroup>
			<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
		</div><!-- end grid -->
		
		<div class="grid one-whole lap-seven-twelfths desk-seven-twelfths">
		<nav id="nav_bar">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu' ) ); ?>
		</nav><!-- #site-navigation -->
		</div><!-- end grid -->
	</div><!-- end grid wrapper -->

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">