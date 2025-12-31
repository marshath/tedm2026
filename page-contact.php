<?php
/*
Template Name: Contact
*/

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
</div><?php // ------- .header-wrap ------- ?>
<main id="site-content" role="main" class="article-wrap">

	<div class="body-content clearfix">
	
		<div class="contact-page">
			<h2><span class="services-icon" aria-hidden="true" data-icon="&#xe903;"></span> Contact</h2>
			<?php the_content(); ?>
		</div>

		<?php get_sidebar('blog'); ?>
		
	</div>

</main>
<?php endwhile; ?>
<?php get_footer(); ?>