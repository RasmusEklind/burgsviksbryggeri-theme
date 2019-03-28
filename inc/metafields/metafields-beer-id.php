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
function beer_id_metabox_html($post)
{
    wp_nonce_field(basename(__FILE__), 'id_meta_box_nonce');

    $id = get_post_meta($post->ID, 'beer_id', true);
    $id = false !== $id ? $id : ''; ?>
	<div class="widefat">
		<input class="widefat" type="text" name="_id" id="_id" value="<?php echo $id; ?>">
	</div>
	<p class="howto">ÖL ID</p>
	<?php
}

/**
 * Save the input data
 *
 * @param number $post_id - ID of the current post.
 */
function beer_id_save_postdata($post_id)
{
    $new_id = (isset($_POST['_id']) ? strip_tags($_POST['_id']) : '');
    update_post_meta($post_id, 'beer_id', $new_id);
}
add_action('save_post', 'beer_id_save_postdata');


/**
 * Adds the metabox to posts
 */
function add_beer_id_metabox()
{
    if (is_multisite()) {
        return;
    }

    $screens = [ 'beer' ];

    foreach ($screens as $screen) {
        add_meta_box(
            'id_metabox',
            'id',
            'beer_id_metabox_html',
            $screen,
            'side',
            'default'
        );
    }
}
add_action('add_meta_boxes', 'add_beer_id_metabox');
