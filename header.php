<!doctype html>
<html>

<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="page-top">
	<div class="wrapper">
		<section>

			<?php
			wp_nav_menu([
				'theme_location' => 'primary-menu',
				'menu' => 'navbar',
				'container' => 'nav',
				'container_class' => 'navbar navbar-expand-lg navbar-light fixed-top py-3',
				'menu_class' => 'navbar-nav ml-auto my-2 my-lg-0',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul> ',
				'depth' => 0,
			]);
			?>