<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
</div><!-- .header-wrap -->
<div id="primary" class="article-wrap">

	<div class="body-content clearfix">
	
		<?php get_template_part('breadcrumb'); ?>
	
	    <article class="blog-content" role="main">
	    
			<?php if (have_posts()) : ?>
	    
	            <?php while (have_posts()) : the_post(); ?>
	    
	                <section class="blog-list-item">
		                <header class="entry-header">
			                <h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		                </header>
	                    <footer>
							<?php get_template_part('inc-author-postmeta'); ?>
	                    </footer>
	                    <figure class="entry-image"><?php the_post_thumbnail('medium'); ?></figure>
	                    <div class="entry-summary"><?php the_excerpt('more &raquo;') ?></div>
	                </section>
	                
	            <?php endwhile; ?>
	    
	            <div class="navigation">
	                <div style="float:left;"><?php next_posts_link('&laquo; Older Entries') ?></div>
	                <div style="float:right;"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	            </div>
	    
	        <?php else : ?>
	    
	            <h2>Not Found</h2>
	            <p>Sorry, but you are looking for something that isn't here.</p>
	            <?php get_search_form(); ?>
	    
	        <?php endif; ?>
	        
		</article> <!-- .blog-content -->
	
	<?php get_sidebar(); ?>
	</div> <!-- .content -->
	
<?php get_footer(); ?>