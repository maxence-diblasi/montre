<?php
/**
 * Basic WooCommerce support
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
get_header(); ?>


<div class="row titre-h3-montre">
	<div class="small-4 columns">
		<span class="lineh3"></span>
	</div>
	<div class="small-4 columns">
		<h3 class="text-center">montres</h3>
	</div>
	<div class="small-4 columns">
		<span class="lineh3"></span>
	</div>
</div>
<div class="row titre-filtre">
	<div class="columns small-12 text-left">
		<h2>Filtrer votre recherche</h2>
	</div>
</div>
<div id="filtre-montres">
	<?php if(is_product_category() && !is_product_category('nouveaute') && !is_product_category('bracelet')){ ?>
	<div class="row filtres-produits">

		<?php dynamic_sidebar( 'filtres-montre' ); ?>

	</div>
	<?php }?>
</div>
<div class="small-12 large-12 row ariane">
		<?php woocommerce_breadcrumb(); ?>
</div>

<div class="row">
	<div class="small-12 large-12 columns full-watches" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( woocommerce_content() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php //the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</article>
	<?php endwhile;?>
	<?php do_action( 'foundationpress_after_content' ); ?>
	</div>
</div>
<?php get_footer();
