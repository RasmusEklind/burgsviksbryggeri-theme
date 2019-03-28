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
function beer_url_metabox_html($post)
{
    wp_nonce_field(basename(__FILE__), 'url_meta_box_nonce');

    $url = get_post_meta($post->ID, 'beer_url', true);
    $url = false !== $url ? $url : ''; ?>
	<div class="widefat">
		<input class="widefat" type="text" name="_url" id="_url" value="<?php echo $url; ?>">
	</div>
	<p class="howto">Länk till systembolaget</p>
	<?php
}

/**
 * Save the input data
 *
 * @param number $post_id - ID of the current post.
 */
function beer_url_save_postdata($post_id)
{
    $new_url = (isset($_POST['_url']) ? strip_tags($_POST['_url']) : '');
    update_post_meta($post_id, 'beer_url', $new_url);
}
add_action('save_post', 'beer_url_save_postdata');


/**
 * Adds the metabox to posts
 */
function add_beer_url_metabox()
{
    if (is_multisite()) {
        return;
    }

    $screens = [ 'beer' ];

    foreach ($screens as $screen) {
        add_meta_box(
            'url_metabox',
            'url',
            'beer_url_metabox_html',
            $screen,
            'side',
            'default'
        );
    }
}
add_action('add_meta_boxes', 'add_beer_url_metabox');
