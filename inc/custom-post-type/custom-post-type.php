<?php

function create_beer_type()
{
    register_post_type(
        'beer',
        array(
            'labels' => array(
                'name' => __('Beers'),
                'singular_name' => __('beer'),
            ),
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt' ),
            'public' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'show_in_nav_menus' => false,
        )
    );
}
add_action('init', 'create_beer_type');
