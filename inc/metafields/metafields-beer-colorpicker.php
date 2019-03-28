<?php
/**
 * The startpage teaser manager
 *
 * @package beer_EDITORIAL
 */

/**
 * DOM markup for the metabox
 *
 * @param object $post - the post object.
 */
function beer_colorpicker_metabox_html($post)
{
    wp_nonce_field(basename(__FILE__), 'colorpicker_meta_box_nonce');

    $colorpicker = get_post_meta($post->ID, 'beer_colorpicker', true);
    $colorpicker = false !== $colorpicker ? $colorpicker : ''; ?>
	<div class="widefat">
		<input class="widefat" type="text" name="_colorpicker" id="_colorpicker" value="<?php echo $colorpicker; ?>">
	</div>
	<p class="howto">#333</p>
	<?php
}

/**
 * Save the input data
 *
 * @param number $post_id - ID of the current post.
 */
function beer_colorpicker_save_postdata($post_id)
{
    $new_colorpicker = (isset($_POST['_colorpicker']) ? strip_tags($_POST['_colorpicker']) : '');
    update_post_meta($post_id, 'beer_colorpicker', $new_colorpicker);
}
add_action('save_post', 'beer_colorpicker_save_postdata');


/**
 * Adds the metabox to posts
 */
function add_beer_colorpicker_metabox()
{
    if (is_multisite()) {
        return;
    }

    $screens = [ 'beer' ];

    foreach ($screens as $screen) {
        add_meta_box(
            'colorpicker_metabox',
            'colorpicker',
            'beer_colorpicker_metabox_html',
            $screen,
            'side',
            'default'
        );
    }
}
add_action('add_meta_boxes', 'add_beer_colorpicker_metabox');
