<div class="top__navigation">
  <div class="top__navigation--logo">
      <img class="top__navigation--image" src="<?php echo get_template_directory_uri(); ?>/assets/img/top-logo.png" alt="Burgsviksbryggeri"/>
  </div>
  <div href="#" id="nav-toggle" class="top__navigation--button button--nav-toggle">MENY</div>
</div>
<?php
$nav = wp_get_nav_menu_object('Main menu');

if ($nav != false): $links = wp_get_nav_menu_items($nav->term_id); ?>
<div class="nav__container" id="overlay">
  <nav class="nav" role="navigation">
      <?php foreach ($links as $key => $link): $url = apply_filters('the_permalink', $link->url); ?>
    <ul class="nav__list">
        <li class="nav__list--item nostylelist">
          <a class="nav__list--link nostylelink" href="<?php echo $url; ?>"><?php echo $link->title; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>
</div>
<?php endif; ?>
