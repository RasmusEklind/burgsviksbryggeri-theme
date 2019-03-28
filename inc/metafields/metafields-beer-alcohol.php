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
function beer_alcohol_metabox_html($post)
{
    wp_nonce_field(basename(__FILE__), 'alcohol_meta_box_nonce');

    $alcohol = get_post_meta($post->ID, 'beer_alcohol', true);
    $alcohol = false !== $alcohol ? $alcohol : ''; ?>
	<div class="widefat">
		<input class="widefat" type="text" name="_alcohol" id="_alcohol" value="<?php echo $alcohol; ?>">
	</div>
	<p class="howto">Alkohol %</p>
	<?php
}

/**
 * Save the input data
 *
 * @param number $post_id - ID of the current post.
 */
function beer_alcohol_save_postdata($post_id)
{
    $new_alcohol = (isset($_POST['_alcohol']) ? strip_tags($_POST['_alcohol']) : '');
    update_post_meta($post_id, 'beer_alcohol', $new_alcohol);
}
add_action('save_post', 'beer_alcohol_save_postdata');


/**
 * Adds the metabox to posts
 */
function add_beer_alcohol_metabox()
{
    if (is_multisite()) {
        return;
    }

    $screens = [ 'beer' ];

    foreach ($screens as $screen) {
        add_meta_box(
            'alcohol_metabox',
            'alcohol',
            'beer_alcohol_metabox_html',
            $screen,
            'side',
            'default'
        );
    }
}
add_action('add_meta_boxes', 'add_beer_alcohol_metabox');
