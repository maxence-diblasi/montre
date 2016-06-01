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
							<img src="<?= _URL_IMAGES; ?>../images/delivery.png" alt="" />
							<p>
								livraison et retour rapide sous 24 heures
							</p>
						</div>
					</article>
					<article class="assurance-2 small-12 medium-4 columns">
						<div class="align-content">
							<img src="<?= _URL_IMAGES; ?>../images/certify.png" alt="" />
							<p>
								Authenticité et tracabilité des produits garantis
							</p>
						</div>
					</article>
					<article class="assurance-3 small-12 medium-4 columns">
						<div class="align-content">
							<img src="<?= _URL_IMAGES; ?>../images/certify.png" alt="" />
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
							<p>À propos de nous</p>
							<p>Contactez-nous</p>
							<p>Confidentialité</p>
							<p>Plan du site</p>
							<p>Crédits</p>
						</article>
						<article class="foot-2 small-12 medium-3 columns">
							<h6>Aide & assistance</h6>
							<p>Mentions légales</p>
							<p>Livraisons et retours</p>
							<p>CGV</p>
						</article>
						<article class="foot-3 small-12 medium-3 columns">
							<h6>suiver nous</h6>
							<p>Facebook</p>
							<p>Tweeter</p>
							<p>Google plus</p>
						</article>
						<article class="foot-4 small-12 medium-3 columns">
							<h6>newsletter</h6>
							<form class="newsletter" action="#" method="post">
								<input type="email" class="mail" name="email" value="votre email">
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

$('.entry-title').before($('.posted_in a'))
$('.posted_in').remove()
</script>
<script type="text/javascript">
$('.owl-carousel').owlCarousel({
loop:true,
items:1,
nav:false,
/*responsive:{
	0:{
		items:1
	},
	600:{
		items:3
	},
	1000:{
		items:5
	}
}*/
})
</script>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
