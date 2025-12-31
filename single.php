<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); setPostViews(get_the_ID()); ?>
  
</div><?php // ------- .header-wrap ------- ?>
<div id="primary" class="article-wrap">

	<div class="body-content clearfix">

    	<?php get_template_part('breadcrumb'); ?>
    
		<article id="post-<?php the_ID(); ?>" class="blog-content" role="main">
				
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
	            <?php get_template_part('inc-author-postmeta'); ?>
			</header><!-- .entry-header -->
			
			<div class="wrapper">
				<div class="entry-content">
	                <figure class="entry-image"><?php the_post_thumbnail('full'); ?></figure>
					<div class="bfm"><?php the_content(); ?></div>
					<?php the_tags( '<p class="tags">Topics: ', ', ', '</p>'); ?>
				</div><!-- .entry-content -->
			</div>
			
			<footer class="entry-author-meta">
				<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
				<?php get_template_part('inc-author-bio'); ?>
			</footer><!-- .entry-author-meta-post -->
		
			<div class="entry-related-posts clearfix">
				<div class="entry-related-lists">
					<h3>Author Blog Posts</h3>
					<?php echo get_related_author_posts(); ?>
				</div><!-- .entry-related-lists -->
				<div class="entry-related-lists">
					<h3>Recent Posts</h3>
					<ul>
					<?php
						$args = array( 'numberposts' => '5', 'post_status' => 'publish' );
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Read '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
						}
					?>
					</ul>
				</div><!-- .entry-related-lists -->
			</div><!-- .entry-related-posts -->

			<div class="entry-comments"><?php comments_template( '', true ); ?></div>
			<?php wp_reset_query(); ?>

		</article><?php // ------- .blog-content ------- ?>
		<?php get_sidebar(); ?>
		
	</div><?php // ------- .content ------- ?>
	
</div> <?php // ------- .article-wrap ------- ?>

<?php endwhile; ?>
<?php get_footer(); ?>