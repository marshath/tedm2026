<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
</div><!-- .header-wrap -->
<main id="site-content" role="main" class="article-wrap">
	
    <article class="">

		<header class="page-header">
			<h1 class="archive-title">
				<?php if ( is_day() ) :
						printf( __( 'Daily Archives: %s' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format' ) ) . '</span>' );

					elseif ( is_tag('adverts') ) :
						printf( __( 'Advertisements' ), '<span>' );
					elseif ( is_tag('branding') ) :
						printf( __( 'Branding' ), '<span>' );
					elseif ( is_tag('automotive') ) :
						printf( __( 'Automotive Instrumentation' ), '<span>' );
					elseif ( is_tag('logo') ) :
						printf( __( 'Logo Design' ), '<span>' );
					elseif ( is_tag('print') ) :
						printf( __( 'Print Design' ), '<span>' );
					elseif ( is_tag('software') ) :
						printf( __( 'Software Design' ), '<span>' );
					elseif ( is_tag('video') ) :
						printf( __( 'Video Production' ), '<span>' );
					elseif ( is_tag('website') ) :
						printf( __( 'Website Design & Development' ), '<span>' );
					elseif ( is_tag('ui') ) :
						printf( __( 'UI: User Interface Design' ), '<span>' );
					elseif ( is_tag('ux') ) :
						printf( __( 'UX: User Experience Design' ), '<span>' );
						
					else :
						_e( 'Archives' );
					endif;
				?>
			</h1>
		</header>
			
		<?php if (have_posts()) : ?>
    
        <section class="">

			<ul class="project">
    
            <?php while (have_posts()) : the_post(); ?>
						
						<li>
						
							<a href="<?php the_permalink(); ?>">
								<figure>
									<?php the_post_thumbnail(); ?>
									<div class="figslider">View details &raquo;</div>
								</figure>
								
								<h3><?php the_title(); ?></h3>
							</a>
							<?php the_tags( '<p class="tags"><span class="tags-title">' . __( '', 'bonestheme' ) . '</span> ', '<span class="screen-reader-text">,</span> ', '</p>' ); ?>
							<?php // the_excerpt() ?>
							
							<?php //edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
		
						</li>
                
            <?php endwhile; ?>
			</ul>
			
        </section>
    
        <div class="navigation">

			<?php bones_page_navi(); ?>
			
        </div>
    
        <?php else : ?>
    
            <h2 class="center">Not Found</h2>
            <p class="center">Sorry, but you are looking for something that isn't here.</p>
            <?php get_search_form(); ?>
    
        <?php endif; ?>
        
	</article> <!-- .blog-content -->
	
</main>
<?php get_footer(); ?>