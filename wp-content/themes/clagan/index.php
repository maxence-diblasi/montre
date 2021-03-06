<?php
/**
 * Basic WooCommerce support
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
get_header(); ?>
<?php include('customslider.php'); ?>

<div class="row">
	<div class="small-12 large-12 columns " role="main">
		<!--// ICI...-->
		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( woocommerce_content() ) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
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
	</div>
</div>

<div class="contner-meilleur-vente">
	<div class="row meilleur-vente">
		<div class="row titre-h3">
			<div class="small-3 columns">
				<span class="lineh3"></span>
			</div>
			<div class="small-6 columns">
				<h3 class="text-center">Séléction clagan</h3>
			</div>
			<div class="small-3 columns">
				<span class="lineh3"></span>
			</div>
		</div>
			<?php
			/*$args = array(
				'post_type' => 'product',
				'posts_per_page' => 3,
				'meta_key' => 'total_sales',
				'orderby' => 'meta_value_num'
				);
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) {
				while ( $loop->have_posts() ) : $loop->the_post();
					get_template_part( 'template-parts/topvente', get_post_format() );
				endwhile;
			} else {
				echo __( 'Erreur de chargement des produits' );
			}
			wp_reset_postdata();*/

		?>

		<?php
					$args = array(
					'post_type' => 'product',
					'stock' => 1,
					'posts_per_page' => 3,
					'meta_key' => 'total_sales',
					'orderby' => 'meta_value_num',
					'product_cat' => 'montre',
					);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
					while ( $loop->have_posts() ) : $loop->the_post();
					?><div class="small-12 medium-6 large-4 columns end animated fadeIn topmontre">
					    <a href="<?php the_permalink() ?>" class="clickproduit"></a>
		                <div class="overflowed">
		                    <div class="watches-img img-mini" style="background-image:url(<?php echo $thumb['0'] ?>)">
								<?php the_post_thumbnail(); ?>
		                </div>
		                </div>
		                <span>
		                    <h5 class="text-center"><?php echo $product->get_categories(); ?></h5>
		                    <h6 class="text-center"><?php the_title(); ?></h6>
		                    <span class="separateur"></span>
		                    <a href="<?php the_permalink(); ?>" class="hvr-sweep-to-right" style="position:relative;z-index:3;">Découvrir</a>
		                </span>
					</div>
 				<?php
					endwhile;
					} else {
					echo __( 'No products found' );
					}
					wp_reset_query();
				?>

	</div>
</div>


<div class="contner-lesmarques">
	<section class="les_marques row">
		<div class="row titre-h3">
			<div class="small-4 columns">
				<span class="lineh3"></span>
			</div>
			<div class="small-4 columns">
				<h3 class="text-center">les marques</h3>
			</div>
			<div class="small-4 columns">
				<span class="lineh3"></span>
			</div>
		</div>
		<div class="small-12 medium-4 large-2 text-center columns">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>categorie-produit/montre/chanel/"><img src="<?= _URL_IMAGES; ?>../images/chanel2.png" alt="" /></a>
		</div>
		<div class="small-12 medium-4 large-2 text-center columns">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>categorie-produit/montre/breitling/"><img src="<?= _URL_IMAGES; ?>../images/breitling2.png" alt="" /></a>
		</div>
		<div class="small-12 medium-4 large-2 text-center columns">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>categorie-produit/montre/omega/"><img src="<?= _URL_IMAGES; ?>../images/omega2.png" alt="" /></a>
		</div>
		<div class="small-12 medium-4 large-2 text-center columns">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>categorie-produit/montre/rolex/"><img src="<?= _URL_IMAGES; ?>../images/rolex2.png" alt="" /></a>
		</div>
		<div class="small-12 medium-4 large-2 text-center columns">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>categorie-produit/montre/bell-ross/"><img src="<?= _URL_IMAGES; ?>../images/bellross2.png" alt="" /></a>
		</div>
		<div class="small-12 medium-4 large-2 text-center columns">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>categorie-produit/montre/cartier/"><img src="<?= _URL_IMAGES; ?>../images/cartier2.png" alt="" /></a>
		</div>
	</section>
</div>

<div class="contner-blog">
	<section class="blog-content row">
		<div class="row titre-h3">
			<div class="small-4 columns">
				<span class="lineh3"></span>
			</div>
			<div class="small-4 columns">
				<h3 class="text-center">notre blog</h3>
			</div>
			<div class="small-4 columns">
				<span class="lineh3"></span>
			</div>
		</div>
		<?php
					$args = array(
					'post_type' => 'post',
					'posts_per_page' => 2,
					);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
					while ( $loop->have_posts() ) : $loop->the_post();
					?><div class="small-12 medium-6 text-center article-du-blog columns">
						<div class="image-block">
							<?php the_post_thumbnail(); ?>
						</div>
						<h6 class=""><?php the_title(); ?></h6>

						<a href="<?php the_permalink(); ?>" class="hvr-sweep-to-right">Lire la suite</a>
					</div>
				<?php
					endwhile;
					} else {
					echo __( 'No products found' );
					}
					wp_reset_query();
				?>

		<!--<div class="small-12 medium-6 text-center columns">
			<div class="image-block">
				<img src="<?php //_URL_IMAGES; ?>../images/montreensemble.png" alt="" />
			</div>
			<h6 class="">DÉCOUVREZ LA ROLEX vector 70</h6>

			<a href="#" class="hvr-sweep-to-right">Lire la suite</a>
		</div>-->

	</section>
</div>
<?php do_action( 'foundationpress_after_content' ); ?>


<?php get_footer();
