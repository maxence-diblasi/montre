<div class="small-12 medium-6 large-4 columns animated fadeIn topmontre">
    <div id="img-mini" class="watches-img img-mini">
        <a href='<?php the_permalink(); ?>'><?php the_post_thumbnail(); ?></a>
    </div>

    <span>
        <h5 class="text-center"><?php echo $product->get_categories(); ?></h5>
        <h6 class="text-center"><?php the_title(); ?></h6>
        <span class="separateur"></span>
        <a href="<?php the_permalink(); ?>" class="hvr-sweep-to-right"><i class="fa fa-eye" aria-hidden="true"></i>Découvrir</a>
    </span>
</div>
