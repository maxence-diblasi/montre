<?php
/*
Template Name: Contact

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
<section class="section-full-contact">
  <div class="row contact-contner">
    <div class="row titre-h3">
      <div class="small-4 columns">
        <span class="lineh3"></span>
      </div>
      <div class="small-4 columns">
        <h3 class="text-center">contact</h3>
      </div>
      <div class="small-4 columns">
        <span class="lineh3"></span>
      </div>
    </div>

    <div class="columns large-6 small-12 contner-infos">

        <div class="infos-titre">
          <img src="<?= _URL_IMAGES; ?>../images/cartouche-logo.png" alt="" />
          <div class="titre-center">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h6 class="text-center"><?php the_content(); ?></h6>
            <?php endwhile; else: ?>
              <h6><?php _e('Sorry, no posts matched your criteria.'); ?></h6>
            <?php endif; ?>
            <span class="st"></span>

          </div>

          <div class="infos-text">
            <p>
              <strong><i class="fa fa-envelope" aria-hidden="true"></i>mail :</strong>  clagan@service-client.com
            </p>
            <p>
              <strong><i class="fa fa-location-arrow" aria-hidden="true"></i>adress :</strong>  17a rue wilson Strasbourg
            </p>
            <p>
              <strong><i class="fa fa-phone" aria-hidden="true"></i>téléphone :</strong>  07 43 78 90 36
            </p>

          </div>

        </div>

    </div>

    <div class="columns large-6 small-12 contner-form" id="contner-form">
        <?php echo do_shortcode('[contact-form-7 id="15" title="Contact form 1"]') ?>
    </div>

  </div>

</section>



<?php get_footer();
