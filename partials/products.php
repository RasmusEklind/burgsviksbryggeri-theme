<div class="section section--products">
  <span class="a11y-accesskeys-span" tabindex="-1"></span>
  <div class="section__content section__content--products">
      <div class="header--wrapper">
        <h2 class="section__heading--products">VÅRA ÖL</h2>
        <h4 class="product__excerpt -entry">Vi jobbar ständigt med att ta fram nya sorter, men då vi sätter kvaliteten högst så skyndar vi
långsamt.</h3>
      </div>
      <div class="section--content--products">
        <ul class="product_list -entry">
          <?php
          $posts = get_posts(array( 'numberposts' => 10, 'post_type' => 'beer'));
          foreach ($posts as $post) :
            setup_postdata($post);
            $postID = $post->ID;

            $color = get_post_meta($postID, 'beer_colorpicker', true); ?>
            <style media="screen">
            .product__id--<?php echo $postID ?> {
                color: <?php echo $color ?>
            }
            </style>
            <li class="product__teaser--title nostylelist">
              <a class="product__teaser--link nostylelink product__id--<?php echo $postID ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
            <?php
          endforeach;
          wp_reset_postdata();
          ?>
        </ul>
        <div class="products__image">

        </div>
      </div>
    </div>
</div>
