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
function beer_amount_metabox_html($post)
{
    wp_nonce_field(basename(__FILE__), 'amount_meta_box_nonce');

    $amount = get_post_meta($post->ID, 'beer_amount', true);
    $amount = false !== $amount ? $amount : ''; ?>
	<div class="widefat">
		<input class="widefat" type="text" name="_amount" id="_amount" value="<?php echo $amount; ?>">
	</div>
	<p class="howto">Mängd</p>
	<?php
}

/**
 * Save the input data
 *
 * @param number $post_id - ID of the current post.
 */
function beer_amount_save_postdata($post_id)
{
    $new_amount = (isset($_POST['_amount']) ? strip_tags($_POST['_amount']) : '');
    update_post_meta($post_id, 'beer_amount', $new_amount);
}
add_action('save_post', 'beer_amount_save_postdata');


/**
 * Adds the metabox to posts
 */
function add_beer_amount_metabox()
{
    if (is_multisite()) {
        return;
    }

    $screens = [ 'beer' ];

    foreach ($screens as $screen) {
        add_meta_box(
            'amount_metabox',
            'amount',
            'beer_amount_metabox_html',
            $screen,
            'side',
            'default'
        );
    }
}
add_action('add_meta_boxes', 'add_beer_amount_metabox');
