<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );
require_once( 'library/slider-lib.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );


define('_URL_IMAGES', get_stylesheet_directory_uri().'/assets/images/');


/*
// --> Premier test pour actions
    add_action('woocommerce_single_product_summary', 15);

// --> Changement d'ordre on met le prix au dessus du titre
    // 1. Supprime l'action initiale d'affichage du titre
        remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
    // 2. Je change sa priorité
        add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 1);



// --> Titre du produit sur l'image...
    // 1. On enleve le titre du produit du DIV concerné
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
    // 2. fonction rajouté dans le fichier single-product/product-image.php
*/
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
//remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_product_description_tab', 11);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 1);



remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);









function my_title($title, $idarticle) {
    if(get_post_format($idarticle) == "video")
    {
        return "article video".$title;
    }
    return "".$title;

}
add_filter('the_title', 'my_title', 10, 2);
