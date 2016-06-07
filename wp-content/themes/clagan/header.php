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

	<header id="site-head" class="site-header" role="banner">
		<section class="header-clagan desktop">
			<div class="container-logo  small-6 medium-6 large-2 columns ">
					<img src="<?= _URL_IMAGES; ?>../images/logo.png" alt="logo" class="logo" />
			</div>
			<div class="container-menu small-6 medium-6 large-8 columns">
				<?php wp_nav_menu( array( 'theme_location' => 'top-bar-r' ) ); ?>
			</div>
			<div class="container-compte small-12 medium-12 large-2 columns">
				<div class="container-cart">
					<a href="#"><img src="<?= _URL_IMAGES; ?>../images/contact.png" alt="contact-clagan" class="contact-clagan" /></a>
				</div>
				<div class="container-user">
					<a href="#"><img src="<?= _URL_IMAGES; ?>../images/user-clagan.png" alt="user-clagan" class="user-clagan" /></a>
				</div>
				<div class="container-cart">
					<a href="#"><img src="<?= _URL_IMAGES; ?>../images/cart-clagan.png" alt="cart-clagan" class="cart-clagan" /></a>
					<span>
						<?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>
					</span>
				</div>
			</div>
		</section>
		<section class="header-clagan mobile">
			<div class="container-logo  small-6 columns ">
					<img src="<?= _URL_IMAGES; ?>../images/logo.png" alt="logo" class="logo" />
			</div>

			<div class="container-compte small-6 columns">
				<div class="container-cart">
					<a href="#"><img src="<?= _URL_IMAGES; ?>../images/contact.png" alt="contact-clagan" class="contact-clagan" /></a>
				</div>
				<div class="container-user">
					<a href="#"><img src="<?= _URL_IMAGES; ?>../images/user-clagan.png" alt="user-clagan" class="user-clagan" /></a>
				</div>
				<div class="container-cart">
					<a href="#"><img src="<?= _URL_IMAGES; ?>../images/cart-clagan.png" alt="cart-clagan" class="cart-clagan" /></a>
					<span>
						<?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>
					</span>
				</div>
			</div>
			<div class="contner-menu small-12 columns">
				<?php wp_nav_menu( array( 'theme_location' => 'top-bar-r' ) ); ?>
			</div>
		</section>
		<section class="container-search small-12 columns">
			<div class="row">
				<?php dynamic_sidebar( 'recherche-header' ); ?>
			</div>
		</section>

	</header>


	<section class="container">


		<?php
				// --> Injection slider my_slider 10
				do_action( 'foundationpress_after_header' );
