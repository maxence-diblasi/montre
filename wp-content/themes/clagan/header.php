<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,800,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lato:700,300,400' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/assets/owl.carousel.min.css" media="screen" title="no title" charset="utf-8">
		
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="top-head-full">
			<div class="top-head row">
				<img src="<?= _URL_IMAGES; ?>../images/logo.png" alt="logo" class="logo" />
				<ul>
					<li><a href="#"><img src="<?= _URL_IMAGES; ?>../images/user.png" alt="user" class="user" /></a></li>
					<li><a href="#"><img src="<?= _URL_IMAGES; ?>../images/panier.png" alt="panier" class="panier" /></a></li>
					<li><a href="#"><img src="<?= _URL_IMAGES; ?>../images/fb.png" alt="fb" class="fb" /></a></li>
					<li><a href="#"><img src="<?= _URL_IMAGES; ?>../images/pinterest.png" alt="pinterest" class="pinterest" /></a></li>
				</ul>
			</div>
		</div>

		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
		</div>
		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
				</ul>
			</div>
			<div class="gounteur">
				<div class="top-bar-section row">
					<?php wp_nav_menu( array( 'theme_location' => 'top-bar-r' ) ); ?>
				</div>

			</div>

		</nav>
	</header>


	<section class="container">


		<?php
				// --> Injection slider my_slider 10
				do_action( 'foundationpress_after_header' );
