<section class="section section--about">
  <span class="a11y-accesskeys-span" id="about" tabindex="-1"></span>
  <div class="section__content section__content--about">
    <?php $post = get_post(15); ?>
      <h1 class="section__heading section__heading--about">BURGSVIKS</br>BRYGGERI</h1>
      <div class="section--about--content">

        <div class="section--about--excerpt">
          <?php echo the_excerpt(); ?>
        </div>

        <div class="section--about--extendedcontent" id="extendedcontent">
          <?php echo apply_filters('the_content', $post->post_content); ?>
        </div>

        <div class="button__about--readmore" id="readmore">
          <span class="nostylelink about--readmore readmore--text" data-text="LÄS MINDRE">LÄS MER</span>
        </div>

      </div>

  </div>
</section>
