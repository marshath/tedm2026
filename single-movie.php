<?php 
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
</div><?php // ------- .header-wrap ------- ?>
<main id="site-content" role="main" class="article-wrap">
	
	<div class="body-content clearfix">
		<div class="contact-page">

			<div class="featured-bar"><a href="<?php echo esc_url( home_url( '/movie/' ) ); ?>">&laquo; Movie Archive</a></div>

			<div class="featured-bar">
				<div class="movie">

					<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail("medium");
						} ?>

					<div class="movie-right">

						<div class="video-btn"><a href="/library/movie/<?php echo the_field('video_file_name'); ?>.mp4" title="Watch <?php the_title(); ?>" rel="bookmark"><span class="dashicons dashicons-video-alt3"></span></a></div>

						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<div class="video-info"><?php echo the_field('date'); ?><br>
						<?php echo the_field('location'); ?></div>

						<div class="video-details"><?php echo get_the_term_list($post->ID, 'genres', '', ', ', '') ?> | <?php echo the_field('time'); ?> min.</div>

						<div class="actor-tags">Actors: <?php echo get_the_term_list($post->ID, 'actors', '', ', ', '') ?></div>

					</div>

				</div>

			</div>

		</div>

		<aside class="jamsidebar clearfix" role="secondary">

			<h5>Genres</h5>
			<nav class="genre-tag-cloud" style="margin-bottom:30px">
				<?php wp_tag_cloud( array( 'taxonomy' => 'genres', 'format' => 'list', 'smallest' => 12, 'largest' => 12 ) ); ?>
			</nav>

			<h5>Actors</h5>
			<nav class="actor-tag-cloud" style="margin-bottom:30px">
				<?php wp_tag_cloud( array( 'taxonomy' => 'actors', 'separator' => ", ", ) ); ?>
			</nav>

			<?php get_sidebar(); ?>

		</aside>

	</div>
	
</main>
<?php endwhile; ?>
<?php get_footer(); ?>
