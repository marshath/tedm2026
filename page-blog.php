<?php
/*
Template Name: Blog
*/

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
</div><?php // ------- .header-wrap ------- ?>

<main id="site-content" role="main" class="article-wrap">

	<div class="body-content clearfix">
	
		<div class="blog-content">
			<h2><span class="services-icon" aria-hidden="true" data-icon="&#xe90d"></span> Blog</h2>
			<?php the_content(); ?>
			<?php //<h3>Latest blog posts</h3> ?>
			<ul class="blogroll">
				

			<?php // blog post list
			if( have_rows('blog_post')):
			// loop through rows
			while(have_rows('blog_post')) : the_row(); ?>
				<li>
					<a href="<?php echo get_sub_field('post_link'); ?>" rel="bookmark">
						<div class="blogroll-img">
							<img src="https://tedm.net/library/images_blog/<?php echo get_sub_field('post_image'); ?>-200x100.jpg" width="200" height="100" alt="<?php echo get_sub_field('post_image_description'); ?>" srcset="https://tedm.net/library/images_blog/<?php echo get_sub_field('post_image'); ?>-200x100.jpg 200w, https://tedm.net/library/images_blog/<?php echo get_sub_field('post_image'); ?>-400x200.jpg 400w" sizes="(max-width: 200px) 20vw, 200px">
						</div> <?php // end .project-img ?>
						<div class="h3-blogroll">
							<h3><?php echo get_sub_field('post_title'); ?></h3>
							<span class="h3-blogroll-bg-top"></span>
							<span class="h3-blogroll-bg-bottom"></span>
						</div> <?php // end .h3-project ?>
					</a>
				</li>
			<?php // end loop
			endwhile;
			// no blog posts found
			else:
				echo 'No blog posts found.';
			endif; ?>
			
			</ul> <?php // end .blogroll ?>
			
			<a href="http://33degreesds.com/blog/" rel="bookmark" class="secondary-btn">View all blog posts <span class="arrow_btn" aria-hidden="true" data-icon="&#xe901;"></span></a>
			<p>&nbsp;</p>
			
		</div> <?php // end .contact-page ?>
		
		<?php get_sidebar('blog'); ?>

	</div> <?php // end .body-content ?>

</main>

<?php endwhile; ?>
<?php get_footer(); ?>