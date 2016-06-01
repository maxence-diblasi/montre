<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $product;

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
		/**
		 * woocommerce_before_single_product_summary hook.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">

		<?php
			/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked woocommerce_product_description_tab - 50
			 */
			do_action( 'woocommerce_single_product_summary' );
			//comments_template();
		?>
		<div class="caracteristique row">
			<div class="small-12 columns contner-caracteristique">
				<h4>Caractéristique</h4>
				 <?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
					 <table>
					<tr>
						<th>
							<p>Rèf :</p>
						</th>
						<td>
							<p class="data"><?= $product->get_sku(); ?></p>
						</td>
					</tr>
				</table>
			<?php endif; ?>

			<?php $annee = get_field('annee', $product->id);
					if (!is_null($annee) && ($annee != "") ):
			?>
				<table>
				<tr>
					<th>
						<p>Année :</p>
					</th>
					<td>
						<p class="data"><?= $annee; ?></p>
					</td>
				</tr>
				</table>
			<?php 	endif; ?>
			<?php $dimensions = get_field('dimensions', $product->id);
					if (!is_null($dimensions) && ($dimensions != "") ):
			?>
				<table>
				<tr>
					<th>
						<p>Dimensions :</p>
					</th>
					<td>
						<p class="data"><?= $dimensions; ?></p>
					</td>
				</tr>
				</table>
			<?php 	endif; ?>
				<?php woocommerce_product_additional_information_tab(); ?>

			</div>


		</div>

	</div><!-- .summary -->

	<?php


		/**
		 * woocommerce_after_single_product_summary hook.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
