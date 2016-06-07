<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<?php $args = array(
'post_type' => 'post',
);
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) {
while ( $loop->have_posts() ) : $loop->the_post();
?><div class="small-12 medium-6 text-center article-du-blog columns">
	<div class="image-block">
		<?php the_post_thumbnail(); ?>
	</div>
	<h6 class="titre-blog"><?php the_title();?></h6>

	<a href="<?php the_permalink(); ?>" class="hvr-sweep-to-right">Lire la suite</a>
</div>
<?php
endwhile;
} else {
echo __( 'No products found' );
}
wp_reset_query();
?>
