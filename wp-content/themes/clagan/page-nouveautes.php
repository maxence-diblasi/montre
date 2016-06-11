<?php
/*
Template Name: Nouveautés

*/
?>
<?php
/**
 * Basic WooCommerce support
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
get_header(); ?>
<div class="clear"></div>
<div class="row titre-h3-nouveautes">
	<div class="small-4 columns">
		<span class="lineh3"></span>
	</div>
	<div class="small-4 columns">
		<h3 class="text-center">Nouveautés</h3>
	</div>
	<div class="small-4 columns">
		<span class="lineh3"></span>
	</div>
</div>
<div class="row">
<?php
      $args = array(
      'post_type' => 'product',
      'stock' => 1,
      'posts_per_page' => '8',
      );
      $loop = new WP_Query( $args );
      if ( $loop->have_posts() ) {
      while ( $loop->have_posts() ) : $loop->the_post();
      ?><div class="small-12 medium-6 large-3 columns end animated fadeIn topmontre">
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
<div class="clear" style="padding-top: 100px;"></div>

<?php get_footer(); ?>
