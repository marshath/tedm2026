<?php
/*
Template Name: Homepage
*/

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
<?php // -------- Hero Image -------- ?>
    <section class="hero-splash clearfix">
		<figure>
			<figcaption>
				<?php the_content(); ?>
			</figcaption>
			<div class="hero-computers">
				<img 
				src="<?php echo get_template_directory_uri(); ?>/library/images/img-homepage-650.png"
				alt="Laptop, tablet and smartphone design with a personal touch" 
				srcset="<?php echo get_template_directory_uri(); ?>/library/images/img-homepage-325.png 325w, 
				<?php echo get_template_directory_uri(); ?>/library/images/img-homepage-650.png 650w, 
				<?php echo get_template_directory_uri(); ?>/library/images/img-homepage-975.png 975w, 
				<?php echo get_template_directory_uri(); ?>/library/images/img-homepage-1300.png 1300w" 
				sizes="(min-width: 325px) 50vw, (min-width: 650px) 100vw, (min-width: 975px) 100vw, 100vw">
			</div>
		</figure>
    </section>

</div> <?php // ------- .header-wrap ------- ?>
<main id="site-content" role="main" class="article-wrap">
    
	<article class="content clearfix">
		<?php wp_reset_query(); ?>
		
		<ul class="project">
			<?php $my3post = array( 
				'post_type' => 'project',
				'category_name' => 'featured', 
				'orderby' => 'rand' 
				);
			$projloop = new WP_Query( $my3post ); ?>
			<?php while ( $projloop->have_posts() ) : $projloop->the_post(); ?>
			
				<li>
				
					<a href="<?php the_permalink(); ?>">
						<figure>
							<?php the_post_thumbnail( 'project-thumb-300' ); ?>
							<div class="figslider">View project &raquo;</div>
						</figure>
						<h3><?php the_title(); ?></h3>
					</a>
					<?php the_tags( '<p class="tags"><span class="tags-title screen-reader-text">' . __( 'Tags:', 'bonestheme' ) . '</span> ', '<span class="screen-reader-text">,</span> ', '</p>' ); ?>
					<?php // the_excerpt() ?>
					
					<?php //edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>

				</li>
				
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</ul>
		
	</article><?php // ------- .content ------- ?>
	
</main>
<?php endwhile; ?>
<?php get_footer(); ?>