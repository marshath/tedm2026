
	<aside class="client-quotes clearfix" role="secondary">
		<?php /* <h2><span class="testimonial-icon" aria-hidden="true" data-icon="&#xe90d;"></span> What My Clients Are Saying...</h2>
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
		</div> */ ?>
		
		
								
		<div id="panel-testimonials" <?php post_class( 'row testimonials' ); ?>>
			<section class="entry-content">
				<h2>I <span class="client-heart"><span class="client-heart-icon">❤</span></span><span class="client-love">love</span> what my clients say...</h2>
				
				<div class="flex-testimonial-container">
					<div class="flexslider">
						<ul class="slides quotes">
							
						<?php // Display Testimonials
							query_posts(array('post_type'=>'testimonials')); ?>
							
							<?php $my1post = array( 'post_type' => 'testimonials' );
							$qloop = new WP_Query( $my1post ); // Cycle through all posts
							while ( $qloop->have_posts() ) : $qloop->the_post(); ?>
							
							<li>
								<blockquote class="testimonial">
									<?php the_content(); ?>
									<cite><?php echo esc_html( get_post_meta( get_the_ID(), 'testimonial_client', true ) ); ?>, <a href="<?php echo esc_url( home_url( '/' ) ); ?><?php echo esc_html( get_post_meta( get_the_ID(), 'testimonial_url', true ) ); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'testimonial_company', true ) ); ?></a></cite></p>
								</blockquote>
							</li>
							
						<?php endwhile; 
						wp_reset_query(); ?>
						
						</ul> <?php // end .testimonials  ?>
					</div>
				</div>
							
			</section> <?php // end .entry-content .inner-wrap  ?>
		</div> <?php // end #panel-testimonials .row .hm-services ?>
		
		
		
	</aside> <!-- END .client-quotes -->