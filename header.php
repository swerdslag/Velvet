<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_get_document_title(); ?> <?php bloginfo('name'); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,400,700&amp;subset=cyrillic" rel="stylesheet"> 
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="wrapper">
		<header id="header">
			<div id="logo" class="logo-wrapper">
				<div class="logo">
					<img src="<?php bloginfo('template_url'); ?>/images/velvet-logo-small.png" alt="Velvet logo">
				</div>
			</div>
			<?php get_search_form(); ?> 	
		</header>
		
		<nav class="main-navigation">
			<?php wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
		</nav>
