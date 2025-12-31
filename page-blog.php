<?php
/*
Template Name: Blog
*/

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
</div><?php // ------- .header-wrap ------- ?>

<main id="site-content" role="main" class="article-wrap">

	<div class="body-content clearfix">
	
		<div class="contact-page">
			<h2><span class="services-icon" aria-hidden="true" data-icon="&#xe90d"></span> Blog</h2>
			<?php the_content(); ?>
			<a href="http://33degreesds.com/blog/" rel="bookmark" class="secondary-btn">View all blog posts <span class="arrow_btn" aria-hidden="true" data-icon="&#xe901;"></span></a>
			<p>&nbsp;</p>
		</div>
		
		<?php get_sidebar('blog'); ?>

	</div>

</main>

<?php endwhile; ?>
<?php get_footer(); ?>