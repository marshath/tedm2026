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
		<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Ted Marshall, UX Designer" rel="home">Ted Marshall, UX Design, Web Design, Graphic Design, Portland, Oregon, Vancouver, Washington</a></h1>
		<nav id="site-navigation" class="main-navigation">
			<h3 id="menu-toggle"><a href="#"><span class="menu-icon" aria-hidden="true" data-icon="&#xe908;"></span> <span class="menu-text">Menu</span></a></h3>
			<ul id="nav-menu" class="menu" role="navigation">
				<li class="page_item page-item-21 <?php if (is_page('portfolio')) { echo 'current_page_item'; }; ?>">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/" aria-current="page">
						<svg id="portfolio" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 32 32">
							<polygon id="left" points="16 3.27 11.14 8.14 19 16 11.14 23.86 16 28.73 28.73 16 16 3.27"/>
							<rect id="right" x="4.42" y="13.22" width="5.55" height="5.55" transform="translate(13.42 -.4) rotate(45)"/>
						</svg>
						Portfolio
					</a>
				</li>
				<li class="page_item page-item-1110 <?php if (is_page('about-me')) { echo 'current_page_item'; }; ?>">
					<a href="<?php echo esc_url( home_url( '/about-me/' ) ); ?>">
						<svg id="about" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 32 32">
							<circle id="top" cx="16" cy="9.5" r="6.5"/>
							<polygon id="bottom" points="28.73 19 3.27 19 16 29 28.73 19"/>
						</svg>
						About
					</a>
				</li>
				<li class="page_item page-item-1108 <?php if (is_page('blog')) { echo 'current_page_item'; }; ?>">
					<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">
						<svg id="blog" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 32 32">
							<polygon id="left" points="26 10.3 26 22.5 6.65 22.5 9.55 25.5 29 25.5 29 13.41 26 10.3"/>
							<rect id="right" x="3" y="6.5" width="19" height="12"/>
						</svg>
						Blog
					</a>
				</li>
				<li class="page_item page-item-19 <?php if (is_page('contact')) { echo 'current_page_item'; }; ?>">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
						<svg id="contact" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 32 32">
							<polygon id="top" points="29 7 3 7 16 16 29 7"/>
							<polygon id="bottom" points="3 25 29 25 16 16 3 25"/>
						</svg>
						Contact
					</a>
				</li>
			</ul>
		</nav><?php // ------- #site-navigation ------- ?>
	</header><?php // ------- #masthead ------- ?>