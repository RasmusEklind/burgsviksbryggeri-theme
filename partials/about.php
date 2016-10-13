<section class="section section--about">
  <span class="a11y-accesskeys-span" id="about" tabindex="-1"></span>
  <div class="section__content section__content--about">
    <?php $post = get_post(15); ?>
      <h1 class="section__heading section__heading--about">Burgsviks</br>Bryggeri</h1>
      <div class="section--about--content">
        <?php echo the_excerpt(); ?>
        <div class="button__about--readmore">
          <a class="nostylelink" href="<?php echo the_permalink(); ?>">LÄS MER</a>
        </div>
      </div>
  </div>
</section>
