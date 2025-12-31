<?php
/*
Template Name: Project
*/

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
</div><?php // ------- .header-wrap ------- ?>
<div id="main" class="article-wrap">

	<article class="content clearfix" role="main">
	
    	<div class="crumb"><p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> // <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Portfolio</a> // <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p></div>
    	
		<h2><?php the_title(); ?></h2>
		
		<?php if (is_page('website-design-and-development')) { //---- show the grid of thumbnails ---- ?>
    
			<?php wp_reset_query(); ?>
			<ul class="website-project">
				<?php query_posts(array('post_type'=>'project')); // ------- Display Projects ------- ?>
				<?php $my3post = array( 'post_type' => 'project' );
				$projloop = new WP_Query( $my3post ); ?>
				<?php while ( $projloop->have_posts() ) : $projloop->the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<figure>
								<?php the_post_thumbnail(); ?>
								<figcaption>View website details &raquo;</figcaption>
							</figure>
							<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
							<h3><?php the_title(); ?></h3>
						</a>
					</li>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</ul><?php // ------- .projects ------- ?>
	
		<?php } else { //---- show the flexslider ---- ?>
	
			<div class="flex-section-container">
			    <div class="flexslider">
			      <ul class="slides">
					<?php $imagesTypes = get_post_meta($post->ID, 'project_image1'); { // displays project images
						foreach ($imagesTypes as $imageType) {
							$fullValue = explode('|', $imageType);
		
							$imgTitle = $fullValue[0];
							$imgLink = $fullValue[1];
		                            
							echo "<li><figure><img src='/library/images_project/$imgLink' alt='$imgTitle' name='$imgTitle'></figure></li>";
						}
					} ?>
			      </ul>
			    </div>
	    	</div><!-- .flex-section-container -->
    	
    	<?php } ?>
    	
		<div class="project-desc">
			<?php the_content(); ?>
		    <p><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="secondary-btn">Contact for Services <span class="arrow_btn" aria-hidden="true" data-icon="&#xe018;"></span></a></p>
		    <?php get_template_part('inc-blog-sociallinks-icon'); ?>
		    <p>&nbsp;</p>
		    <?php get_template_part('inc-services'); ?>
		</div><!-- .project-desc -->
	</article><!-- .content -->
	<div class="related-wrap">
	<?php get_sidebar('project'); ?>
  <? } ?>    

<?php endwhile; ?>
<?php get_footer(); ?>