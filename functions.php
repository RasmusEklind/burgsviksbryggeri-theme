<?php

if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true);
}

require get_template_directory() . '/inc/custom-post-type/custom-post-type.php';
require get_template_directory() . '/inc/metafields/metafields-beer-alcohol.php';
require get_template_directory() . '/inc/metafields/metafields-beer-amount.php';
require get_template_directory() . '/inc/metafields/metafields-beer-id.php';
require get_template_directory() . '/inc/metafields/metafields-beer-url.php';
require get_template_directory() . '/inc/metafields/metafields-beer-colorpicker.php';
