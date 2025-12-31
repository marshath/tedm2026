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

			<div class="featured-bar"><a href="<?php echo esc_url( home_url( '/jam/' ) ); ?>">&laquo; Jam Archive</a></div>
				<table class="jams">

					<thead>
						<tr>

							<th class="hdr-audio">Audio</th>
							<th class="hdr-video">Video</th>
							<th class="hdr-title">Title</th>
							<th class="hdr-musicians">Musicians</th>
							<th class="hdr-date">Y.M.D</th>

						</tr>
					</thead>

					<tbody>
						<tr>

							<td class="jam-audio"><?php // if audio file is available, display audio link
								$audio_file = get_field('mp3');
								if ($audio_file) { ?>
									<a href="/library/jam/<?php echo $audio_file; ?>.mp3" title="Play <?php the_title(); ?> audio" rel="bookmark"><span class="dashicons dashicons-controls-volumeon"></span></a>
								<?php } ?></td>

							<td class="jam-video"><?php // if video file is available, display audio link
								$video_file = get_field('video');
								if ($video_file) { ?>
									<a href="/library/jam/<?php echo $video_file; ?>.mp4" title="Play <?php the_title(); ?> video" rel="bookmark"><span class="dashicons dashicons-video-alt3"></span></a>
								<?php } ?></td>

							<td class="jam-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></td>

							<td class="jam-musicians"><?php echo get_the_term_list($post->ID, 'musicians', '', ', ', '') ?></td>

							<td class="jam-date"><?php the_date('Y.m.d'); ?></td>

						</tr>
					</tbody>

				</table>
			</div>

			<aside class="jamsidebar clearfix" role="secondary">

				<img src="/library/jam/musicians.gif" style="margin-bottom:15px;" />

				<h5>In-Studio Musicians</h5>
				<nav class="musician-tag-cloud" style="text-align:left;margin-bottom:30px">
					<?php wp_tag_cloud( array( 'taxonomy' => 'musicians' ) ); ?>
				</nav>

				<?php get_sidebar(); ?>

			</aside>
			
		</div>
	</div>

</main>
<?php endwhile; ?>
<?php get_footer(); ?>
