<?php get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
    <?php $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
        $thumb_url = $thumb_url_array[0];
        $alcohol = get_post_meta($post->ID, 'beer_alcohol', true);
        $amount = get_post_meta($post->ID, 'beer_amount', true);
        $id = get_post_meta($post->ID, 'beer_id', true);
        $url = get_post_meta($post->ID, 'beer_url', true);
        $color = get_post_meta($post->ID, 'beer_colorpicker', true); ?>
    <main class="main" role="main">
      <div class="row">

        <article class="section gc article">
          <div class="article--wrapper">

            <div class="g-6 entry__wrapper">
              <div class="entry__wrapper--image">
                <figure class="image--figure">
                  <img class="image" src="<?php echo $thumb_url; ?>" alt="">
                </figure>
              </div>
            </div>
            <div class="g-6 entry-content">
                <style media="screen">
                    .beer-order a {
                    color: <?php echo $color; ?>;
                    }
                    .entry-title {
                        color: <?php echo $color; ?>;
                    }
                </style>
              <?php the_title('<h1 class="g-12 entry-title">', '</h1>'); ?>

              <div class="-entry">
                  <div class="content-wrapper">
                      <?php the_content(); ?>
                </div>

                <div class="beer-information">
                    <span class="item"><?php echo $alcohol; ?></span>
                    <span class="item"><?php echo $amount; ?></span>
                    <span class="item"><?php echo $id; ?></span>
                </div>

                <div class=beer-order>
                    <a href="<?php echo $url; ?>" target="_blank">BESTÄLL</a>
                </div>

              </div>

            </div>
          </div>
        </article>

      <!-- </div>
    </main> -->
  <?php
    }
}
?>
<?php get_template_part('partials/products-grid'); ?>

<?php get_template_part('partials/contact'); ?>

<?php get_footer(); ?>
