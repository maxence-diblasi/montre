<?php

function my_slider() {
    if (is_front_page() || is_home())
    {
        get_template_part( 'template-parts/slider' );

    }
}
add_action('foundationpress_after_header', 'my_slider', 10);
