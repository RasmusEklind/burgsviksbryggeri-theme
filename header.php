<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if (wp_title('', false)) {
    echo ' :';
} ?> <?php bloginfo('name'); ?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/ico-logo-1000px.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="keywords" content="Burgsviksbryggeri, Burgsvik, Bryggeri, Öl, Gotland, Sudret">
		<meta property=”og:title” content=”Burgsviksbryggeri”/>
		<meta property="og:site_name" content="Burgsviksbryggeri">
		<meta property=”og:url” content=”http://burgsviksbryggeri.se”/>
		<meta property="og:locale" content="sv_SE">
		<meta property="og:type" content="website">
        <script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>


		<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/theme.css'; ?>">
			<?php
             wp_head();
             ?>
	</head>
	<body class="c-grid">
		<?php if (is_home()) {
                 ?>

            <div id="hidden" class="startpage-overlay">

            </div>
            <?php
                 $ishome = 'startpage';
             } ?>
			<header class="main--header header clear <?php echo $ishome; ?>" role="banner">
                <div class="top__navigation">


                  <?php
                  $nav = wp_get_nav_menu_object('Main menu');
                  if ($nav != false): $links = wp_get_nav_menu_items($nav->term_id);

                  ?>

                  <ul class="nav__desktop">
                      <a class="top__navigation--link" href="/">
                        <img class="top__navigation--image" src="<?php echo get_template_directory_uri(); ?>/assets/img/top-logo.png" alt="Burgsviksbryggeri"/>
                        <p class="top__navigation--title nostylelink">BURGSVIKS<br> BRYGGERI</p></a>
                    <?php   foreach ($links as $key => $link): $url = apply_filters('the_permalink', $link->url); ?>
                    <li class="nav__desktop--item nostylelist">
                      <a class="nav__desktop--link nostylelink" data-scroll href="<?php echo $url; ?>"><?php echo $link->title; ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>

                <?php endif; ?>
                    </div>
			</header>
