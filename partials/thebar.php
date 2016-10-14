<section class="section section--thebar">
  <span class="a11y-accesskeys-span" id="thebar" tabindex="-1"></span>
  <div class="decoration decoration--thebar"></div>
  <div class="section__content section__content--thebar">
    <h2 class="section__heading section__heading--thebar">Baren</h2>
      <div class="section--content--thebar">
          <?php
          $posts = get_posts(array('category' => 6, 'posts_per_page' => 2));
          foreach ($posts as $post) :
          setup_postdata($post); ?>
              <div class="thebar__teaser--body">
                <?php
                echo apply_filters('the_content', $post->post_content);
                ?>
              </div>
              <?php
              $image_classes = 'thebar__featured-image';

              if (has_post_thumbnail()) {
                the_post_thumbnail('full', array('class' => $image_classes));
              } else {
                echo wp_get_attachment_image(206, 'large', false, array('class' => $image_classes));
              }
              ?>

          <?php
          endforeach;
          wp_reset_postdata();
          ?>
          </div>
  </div>
</section>
