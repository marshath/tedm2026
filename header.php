<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-283194-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-283194-1');
	</script>
	
	<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<?php // icons & favicons
		get_template_part('inc/header-icons'); ?>
	<link rel="stylesheet" media="screen"  href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php // header includes
		get_template_part('inc/header-plugins'); ?>
	<?php // wordpress head functions
		wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header-wrap">
	<header id="masthead" class="site-header clearfix" role="banner">
		<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Ted Marshall - Graphic Designer" rel="home">Ted Marshall Graphic Designer</a></h1>
		<nav id="site-navigation" class="main-navigation">
			<h3 id="menu-toggle"><a href="#"><span class="menu-icon" aria-hidden="true" data-icon="&#xe908;"></span> <span class="menu-text">Menu</span></a></h3>
			<ul id="nav-menu" class="menu" role="navigation">
				<?php if (is_archive()) { // project archive navigation ?>
					<li class="page_item page-item-21 current_page_item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/" aria-current="page">Portfolio</a></li>
					<li class="page_item page-item-1110"><a href="<?php echo esc_url( home_url( '/about-me/' ) ); ?>">About Me</a></li>
					<li class="page_item page-item-1108"><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a></li>
					<li class="page_item page-item-19"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li> <?php
				} else { // all other navigation
					wp_list_pages( array (
					'post_type' => 'page', //ensure only standard pages are listed
					'title_li' => '',
					'sort_column' => 'menu_order',
					'depth' => 1,
					'exclude' => 2, // exclude home page
					));
				} ?>
			</ul>
		</nav><?php // ------- #site-navigation ------- ?>
	</header><?php // ------- #masthead ------- ?>