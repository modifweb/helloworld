<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ergonomes-professionnels
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link href='//fonts.googleapis.com/css?family=Montserrat:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Montserrat+Alternates:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css' />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="mobile-menu-wrapper">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ergonomes-professionnels' ); ?></a>

	<div class="site-header site-header-spacer">
		<div class="site-branding">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
		</div><!-- .site-branding -->
	</div>

	<header id="masthead" class="site-header" role="banner">
		<div id="hamburger" class="hamburger">
			<span></span>
			<span></span>
			<span></span>
		</div>

		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>"></a></h1>
		</div><!-- .site-branding -->

		<div id="site-navigation-wrapper" class="main-navigation-wrapper">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ergonomes-professionnels' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
