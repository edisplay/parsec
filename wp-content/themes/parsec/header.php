<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Parsec
 */

global $p_svg_path;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'parsec' ); ?></a>

	<header id="masthead" class="site-header clearfix" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<svg class="icon-align-justify menu-toggle" aria-controls="menu" aria-expanded="false"><use xlink:href="<?php echo $p_svg_path; ?>#icon-align-justify"></use></svg>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="<?php echo trailingslashit( get_stylesheet_directory_uri() ); ?>assets/img/logo-wordmark.png"alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content"> <?php //here is where I will put a class for choosing the layout ?>
