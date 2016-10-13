<?php get_header(); ?>
<main class="main" role="main">
  <section class="section section--single">
    <?php
  while (have_posts()) : the_post();
    if (in_category(147, $post)) {
      get_template_part('partials/content', 'products');
    } else {
      get_template_part('partials/content', 'about');
    }
  endwhile;
  wp_reset_postdata();
?>


  </section>
</main>
<?php get_template_part('partials/contact'); ?>
<?php get_footer(); ?>
