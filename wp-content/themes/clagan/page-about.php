<?php
/*
Template Name: À propos

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

<div class="about-full">
    <section class="row about-contner">
        <div class="row titre-h3">
			<div class="small-4 columns">
				<span class="lineh3"></span>
			</div>
			<div class="small-4 columns">
				<h3 class="text-center">à propos</h3>
			</div>
			<div class="small-4 columns">
				<span class="lineh3"></span>
			</div>
		</div>
        <div id="ticket-contner">
            <article class="large-8 small-12 columns img-contner">
                <img src="<?= _URL_IMAGES; ?>../images/cligan-agout.png" alt="" />
            </article>
            <article class="large-4 small-12 text-left columns text-contner">
                <img src="<?= _URL_IMAGES; ?>../images/logo.png" class="logo-1" alt="" />
                <p>
                    Clagan est fondé en 1998 par deux amis Jacques Fournier et Christian Jean-paul, tout deux passionés de montre de luxe ancienne, . Dans un premier temps une boutique est ouvert à Strasbourg rue de l'homme de Fer, en 2005 suite à l'afflu d'une demande toujours croissante Clagan souhaite répondre
                </p>
                <img src="<?= _URL_IMAGES; ?>../images/about-montre.png" class="about-montre" alt="" />
            </article>
        </div>
        <img src="<?= _URL_IMAGES; ?>../images/ombre-about.png" alt="" class="ombre" />
    </section>

</div>





<?php get_footer();
