
<?php

function blogin() {

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'blogin');


register_nav_menus(array(
    'header' => __('Header Menu'),
));

