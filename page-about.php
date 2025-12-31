<?php
/*
Template Name: About Me
*/

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
</div><?php // ------- .header-wrap ------- ?>
<main id="site-content" role="main" class="article-wrap">

	<article class="content clearfix">
		<h2><span class="services-icon" aria-hidden="true" data-icon="&#xe900;"></span> About Me</h2>
		<figure><img src="<?php echo get_template_directory_uri(); ?>/library/images_project/chart-aboutUs.jpg" class="image-wrap"></figure>
		<?php the_content(); ?>
		<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="secondary-btn">Contact Me <span class="arrow_btn" aria-hidden="true" data-icon="&#xe901;"></span></a>
	</article>
	
	<div class="quotes-wrap">
	
		<?php get_sidebar('about'); ?>
		
	</div> <?php // ------- .quotes-wrap ------- ?>  

</main>
<?php endwhile; ?>
<?php get_footer(); ?>