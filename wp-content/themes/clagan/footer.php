<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="full-assurance">
			<footer id="footer">
				<section id="assurance" class="row">
					<article class="assurance-1 small-12 medium-4 columns">
						<div class="align-content">
							<img src="<?= _URL_IMAGES; ?>../images/livraison.png" alt="" />
							<p>
								Livraison et retour rapide sous 24 heures
							</p>
						</div>
					</article>
					<article class="assurance-2 small-12 medium-4 columns">
						<div class="align-content">
							<img src="<?= _URL_IMAGES; ?>../images/authentique.png" alt="" />
							<p>
								Authenticité et tracabilité des produits garantis
							</p>
						</div>
					</article>
					<article class="assurance-3 small-12 medium-4 columns">
						<div class="align-content">
							<img src="<?= _URL_IMAGES; ?>../images/secure.png" alt="" />
							<p>
								Paiement sécurisé via paypal, visa et mastercard
							</p>
						</div>
					</article>
				</section>
			</div>
			<div id="full-footer">
				<section id="contner-foot" class="">
					<div class="row" id="foot">
						<article class="foot-1 small-12 medium-3 columns">
							<h6>informations</h6>
							<a href="#">À propos de nous</a>
							<a href="#">Contactez-nous</a>
							<a href="#">Confidentialité</a>
							<a href="#">Plan du site</a>
							<a href="#">Crédits</a>
						</article>
						<article class="foot-2 small-12 medium-3 columns">
							<h6>Aide & assistance</h6>
							<a href="#">Mentions légales</a>
							<a href="#">Livraisons et retours</a>
							<a href="#">CGV</a>
						</article>
						<article class="foot-3 small-12 medium-3 columns">
							<h6>suivez-nous</h6>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a>
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>Tweeter</a>
							<a href="#"><i class="fa fa-google" aria-hidden="true"></i>Google plus</a>
						</article>
						<article class="foot-4 small-12 medium-3 columns">
							<h6>newsletter</h6>
							<form class="newsletter" action="#" method="post">
								<input type="email" class="mail" name="email" value="votre email...">
								<input type="submit" class="envois" name="submit" value=">">
							</form>
						</article>
					</div>
				</section>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>

<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/owl.carousel.min.js"></script>
<script type="text/javascript">
$('.block-img').css('height', $('.block-txt').outerHeight())
$('.text-contner').css('height', $('.img-contner').height())

$('.contner-infos').css('height', $('.contner-form').outerHeight())

$('.block-img img').css('max-height', $('.block-txt').outerHeight() - 100)
$('.customslider').css('height', $( window ).height() - $('.top-bar-section').height())
$('.img-mini').each(function(){
	$(this).css('height', $('.img-mini').width())
})

$('.topmontre').hover(function(){
	$(this).find('.img-mini').css('transform', 'scale(1.1)');
}, function(){
	$(this).find('.img-mini').css('transform', 'scale(1)')
})
$('.products > li').hover(function(){
	$(this).find('.wp-post-image').css('transform', 'scale(1.1)');
}, function(){
	$(this).find('.wp-post-image').css('transform', 'scale(1)')
})
$('.entry-title').before($('.posted_in a'))
$('.posted_in').remove()
</script>
<script type="text/javascript">
$('.owl-carousel').owlCarousel({
loop:true,
items:1,
nav:false,
autoplay:true,
autoplayTimeout: 7000,
})
$('#woocommerce_layered_nav-2 > select > option:first-of-type').replaceWith('<option value selected="selected">H/F</option>');
$('#woocommerce_product_categories-2 > select > option:first-of-type').replaceWith('<option value selected="selected">Marques</option>');
$('#woocommerce_layered_nav-3 > select > option:first-of-type').replaceWith('<option value selected="selected">Mécanisme</option>');
</script>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
