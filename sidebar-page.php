<?php  if (is_page('portfolio')) { // ----------- Services ----------- ?>

	<aside class="services clearfix" role="secondary">
		<?php query_posts(array('showposts' => 3, 'post_parent' => 21, 'post_type' => 'page','post__not_in' => array(1098)) );
			while (have_posts()) {
				the_post(); //vital ?>
				<section class="work-services">
					<h3><span class="services-icon" aria-hidden="true" data-icon="&#<?php echo get_post_meta($post->ID, 'service_icon', true); ?>;"></span> <?php the_title(); ?></h3>
						<figure>
							<div class="services-img"><?php the_post_thumbnail(); ?></div>
							<figcaption>
								<?php echo get_post_meta($post->ID, 'summary', true); ?>
								<p class="services_btn"><a href="<?php the_permalink() ?>" class="secondary-btn"><?php the_title(); ?> <span class="arrow_btn" aria-hidden="true" data-icon="&#xe018;"></span></a></p>
							</figcaption>
						</figure>
				</section>
	        <?php } ?>
	</aside> <!-- .services -->

<? wp_reset_query(); //Restore global post data
	} // ----------- END Services ----------- ?>
	
<?php  if (is_page('about-me')) { // ----------- Testimonials ----------- ?>

	<aside class="client-quotes clearfix" role="secondary">
		<h3><span class="testimonial-icon" aria-hidden="true" data-icon="&#xe01a;"></span> What My Clients Are Saying...</h3>
		<div class="quotes">
			<?php query_posts(array('post_type'=>'testimonials')); // ------- Display Testimonials ------- ?>
			<?php $my1post = array( 'post_type' => 'testimonials' );
			$qloop = new WP_Query( $my1post ); ?>
			<!-- Cycle through all posts -->
			<?php while ( $qloop->have_posts() ) : $qloop->the_post(); ?>
				<blockquote class="testimonial">
					<?php the_content(); ?>
					<cite><?php echo esc_html( get_post_meta( get_the_ID(), 'testimonial_client', true ) ); ?>, <a href="<?php echo esc_url( home_url( '/' ) ); ?><?php echo esc_html( get_post_meta( get_the_ID(), 'testimonial_url', true ) ); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'testimonial_company', true ) ); ?></a></cite></p>
				</blockquote>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>			
		</div>
	</aside> <!-- .client-quotes -->
      
<? } // ----------- END Testimonials ----------- ?>

<?php  if (is_single()) { // ----------- Related Projects ----------- ?>

	<aside class="related-sites clearfix" role="secondary">
		<h3><span class="related-sites-icon" aria-hidden="true" data-icon="&#xe019;"></span> More Sweet Websites...</h3>
		<ul class="project">
			<?php query_posts(array('post_type' => 'project')); ?>
			<?php $my4post = array( 'post_type' => 'project', 'posts_per_page' => 4, 'cat' => 'Featured', 'orderby' => rand );
			$projloop = new WP_Query( $my4post ); ?>
			<?php while ( $projloop->have_posts() ) : $projloop->the_post(); ?>
	        	<li>
	                <a href="<?php the_permalink(); ?>">
		        		<figure>
		                	<?php the_post_thumbnail(); ?>
		                    <figcaption>View project &raquo;</figcaption>
		                </figure>
		                <h3><?php the_title(); ?></h3>
	                </a>
	            </li>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
	    </ul>
	</aside> <!-- .related-sites -->
      
<? } // ----------- END Related Projects ----------- ?>

<?php  if (is_page(array('contact', 'blog'))) { // ----------- Contact ----------- ?>

	<div id="secondary" class="sidebar" role="complementary">
		
		<div class="sidebar-social-links clearfix">
			<h3>Follow Me on ...</h3>
			<div class="sidebar-tablet-f2"><?php get_template_part('inc-socialmedia'); ?></div>
			<div class="sidebar-social-boxes">
				<a class="twitter-timeline" href="https://twitter.com/ted_marshall" data-widget-id="356190117016264704">Tweets by @ted_marshall</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				 <!-- Google Plus -->
				<div class="g-person" data-width="284" data-href="//plus.google.com/109966134777404233550" data-layout="landscape" data-showtagline="false" data-showcoverphoto="false" data-rel="author"></div>
				<script type="text/javascript">
				  (function() {
				    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				    po.src = 'https://apis.google.com/js/plusone.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>
			</div><!-- .social-boxes -->
		</div>
	</div><!-- .sidebar -->
      
<? } // ----------- END Get in Touch ----------- ?>