<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
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
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/theme.css'; ?>">
			<?php
			 wp_head();
			 ?>
	</head>
	<body>
			<header class="main--header header clear" role="banner">
				<?php get_template_part('partials/nav'); ?>
				<!-- <div class="section__content section__content--logo">
					<a class="top--arrow icon-down-open nostylelink" href="#campaign"></a>
				</div> -->
			</header>
