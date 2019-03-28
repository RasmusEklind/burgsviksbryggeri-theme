<?php get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
    <?php $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
        $thumb_url = $thumb_url_array[0]; ?>
    <main class="main" role="main">
      <div class="row">

      <article class="gc -maximize article">

        <?php the_title('<h1 class="g-12 entry-title">', '</h1>'); ?>

        <div class="g-6 entry__wrapper">
          <div class="entry__wrapper--image">
            <figure class="image--figure">
              <img class="image" src="<?php echo $thumb_url; ?>" alt="">
            </figure>
          </div>
        </div>

        <div class="g-6 entry-content">
          <div class="-entry">
            <?php the_content(); ?>
          </div>
        </div>

      </article>

    </div>
    </main>
  <?php
    }
}
?>
<?php get_template_part('partials/contact'); ?>
<?php get_footer(); ?>
