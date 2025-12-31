<?php
/*
Template Name: Projects
*/

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
</div><?php // end .header-wrap ?>
<main id="site-content" role="main" class="article-wrap">

	<article class="content clearfix">
		
		<div class="flex-project-container">
		    <div class="flexslider">
		    	<ul class="slides">
			    	
			    	<?php if ( have_rows('project_gallery_images') ) {
						while ( have_rows('project_gallery_images') ) {
							the_row();
							
							$image = get_sub_field('project_image');
							$title = get_sub_field('project_image_text'); ?>
							
							<li>
								<figure>
									<img 
									src="<?php echo esc_url( home_url( '/' ) ); ?>/library/images_projects/<?php echo $image; ?>-1000.jpg"
									alt="<?php echo $title; ?>" 
									srcset="<?php echo esc_url( home_url( '/' ) ); ?>/library/images_projects/<?php echo $image; ?>-300.jpg 300w,
									<?php echo esc_url( home_url( '/' ) ); ?>/library/images_projects/<?php echo $image; ?>-400.jpg 400w, 
									<?php echo esc_url( home_url( '/' ) ); ?>/library/images_projects/<?php echo $image; ?>-500.jpg 500w, 
									<?php echo esc_url( home_url( '/' ) ); ?>/library/images_projects/<?php echo $image; ?>-600.jpg 600w, 
									<?php echo esc_url( home_url( '/' ) ); ?>/library/images_projects/<?php echo $image; ?>-800.jpg 800w, 
									<?php echo esc_url( home_url( '/' ) ); ?>/library/images_projects/<?php echo $image; ?>-1000.jpg 1000w, 
									<?php echo esc_url( home_url( '/' ) ); ?>/library/images_projects/<?php echo $image; ?>-1200.jpg 1200w, 
									<?php echo esc_url( home_url( '/' ) ); ?>/library/images_projects/<?php echo $image; ?>-1400.jpg 1400w" 
									sizes="(min-width: 300px) 100vw, (min-width: 400px) 100vw, (min-width: 500px) 100vw, (min-width: 600px) 100vw, (min-width: 800px) 100vw, (min-width: 1000px) 100vw, (min-width: 1200px) 100vw, 100vw">
								</figure>
							</li>
						
						<?php } // endwhile ?>
						
					<?php } // endif ?>
					
		    	</ul>
		    </div>
    	</div>
    	
		<h2 class="project-title"><?php the_title(); ?></h2>
		
		<div class="project-desc">
			<?php the_content(); ?>
		</div>
		
	</article> <?php // end .content ?>
	
	<div class="related-wrap">
	
		<?php get_sidebar('project'); ?>
	
	</div> <?php // end .article-wrap ?>
	
</main>
<?php endwhile; ?>
<?php get_footer(); ?>
