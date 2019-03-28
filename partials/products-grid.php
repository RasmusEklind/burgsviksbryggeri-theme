<div class="section section--products-grid">
  <span class="a11y-accesskeys-span" tabindex="-1"></span>
  <div class="section__content section__content--products-grid">
      <div class="section--content--products-grid">
          <h2 class="section__heading--products">VÅRT SORTIMENT</h2>
        <div class="product-grid--list">
          <?php
          $posts = get_posts(array( 'numberposts' => 10, 'post_type' => 'beer'));
          foreach ($posts as $post) :
            setup_postdata($post);
            $thumb_id = get_post_thumbnail_id();
            $alcohol = get_post_meta($post->ID, 'beer_alcohol', true);
            $amount = get_post_meta($post->ID, 'beer_amount', true);

            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
            $thumb_url = $thumb_url_array[0];
            $postID = $post->ID;
            $color = get_post_meta($post->ID, 'beer_colorpicker', true); ?>
            <style media="screen">
            .product__id--<?php echo $post->ID ?> {
                color: <?php echo $color ?>
            }
            </style>
            <div class="products-grid--item nostylelist">
                <div class="product-grid--image"  style="background-image:url(<?php echo $thumb_url ?>);">

              <a class="products-grid--link nostylelink" href="<?php the_permalink(); ?>"></a>

          </div>
              <div class="product-grid--content">
                  <a class="product__teaser--link nostylelink product__id--<?php echo $postID ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  <span class="products-grid--amount"><?php echo $alcohol; ?></span>
              </div>

          </div>

            <?php
          endforeach;
          wp_reset_postdata();
          ?>
      </div>
      </div>
    </div>
</div>
