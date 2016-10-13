<section class="section section--location">
  <span class="a11y-accesskeys-span" id="location" tabindex="-1"></span>
  <div class="section__content section__content--location">
    <?php $post = get_post(17); ?>
      <h2 class="section__heading section__heading--location"><?php echo $post->post_title; ?></h2>
      <div class="section--location--content">
        <?php echo apply_filters('the_content', $post->post_content); ?>
        <div class="section--location--quote">
        <?php
        if (has_excerpt()) {
          echo the_excerpt();
        }
        ?>
        </div>
        <?php
        $image_classes = 'location__featured-image';

        if (has_post_thumbnail()) {
          the_post_thumbnail('large', array('class' => $image_classes));
        } else {
          echo wp_get_attachment_image(206, 'large', false, array('class' => $image_classes));
        }
        ?>

      </div>
  </div>
</section>
