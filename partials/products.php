<section class="section section--products">
  <span class="a11y-accesskeys-span" id="products" tabindex="-1"></span>
  <div class="section__content section__content--products">
    <h2 class="section__heading section__heading--products">Ölsorter</h2>
    <div class="section--content--products">
          <?php
          $posts = get_posts(array('category' => 1, 'posts_per_page' => 11));
          foreach ($posts as $post) :
          setup_postdata($post); ?>
            <article class="product__teaser">
              <div class="relative-div">
                <?php
                $image_classes = 'product__teaser--featured-image';

                if (has_post_thumbnail()) {
                  the_post_thumbnail('large', array('class' => $image_classes));
                } else {
                  echo wp_get_attachment_image(206, 'large', false, array('class' => $image_classes));
                }
                ?>
                <h3 class="product__teaser--title">
                  <a class="product__teaser--link" href=""><?php the_title(); ?></a>
                </h3>
              </div>
              <div class="product__teaser--body">
                  <?php echo apply_filters('the_content', $post->post_content); ?>
              </div>
            </article>
          <?php
          endforeach;
          wp_reset_postdata();
          ?>
      </div>
  </div>
</section>
