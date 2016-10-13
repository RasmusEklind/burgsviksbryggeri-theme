<article id="post-<?php the_ID(); ?>" class="article">
  <span class="a11y-accesskeys-span" id="about" tabindex="-1"></span>
  <section class="section__content article__body">
    <header class="article__header">
      <h2 class="article__title"><?php the_title(); ?></h2>
    </header>
    <div class="article__body--excerpt">
            <?php echo the_excerpt(); ?>
    </div>
    <div class="article__body--content">
    <?php echo apply_filters('the_content', $post->post_content); ?>
    </div>
  </section>
</article>
