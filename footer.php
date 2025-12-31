<?php //</div><!-- .article-wrap --> ?>
<div class="footer-wrap">

	<footer class="site-footer">
		
		<section class="footer-company-info" itemscope itemtype="https://schema.org/ProfessionalService">
			<h4 class="name" itemprop="name">Ted Marshall</h4>
			<ul>
				<li class="ftr-contact" itemprop="URL"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="lbp_secondary"><span class="email-icon" aria-hidden="true" data-icon="&#xe904;"></span> ted@ted.net</a></li>
				<li class="ftr-contact" itemprop="telephone"><a href="tel:5037845673" class="lbp_secondary"><span class="email-icon" aria-hidden="true" data-icon="&#xe909;"></span> (503) 784-5673</a></li>
			</ul>
		</section><!-- .contact-ftr -->
		
		<section class="footer-navigation">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="nav-icon" aria-hidden="true" data-icon="&#xe90f;"></span> <span class="nav-text">Portfolio</span></a></li>
				<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><span class="nav-icon" aria-hidden="true" data-icon="&#xe900;"></span> <span class="nav-text">About</span></a></li>
				<li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><span class="nav-icon" aria-hidden="true" data-icon="&#xe90d;"></span> <span class="nav-text">Blog</span></a></li>
				<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><span class="nav-icon" aria-hidden="true" data-icon="&#xe903;"></span> <span class="nav-text">Contact</span></a></li>
			</ul>
		</section><!-- .nav-ftr -->
		
		<section class="footer-social-links">
			<h4>Follow Me on ...</h4>
			<?php get_template_part('inc/inc-socialmedia'); ?>
		</section><!-- .social-ftr -->
		
		<p class="copyright">&copy; <? echo date("Y"); ?> Theodore Marshall. All Rights Reserved.</p>
		
	</footer>
	
</div><!-- .footer-wrap -->

<?php get_template_part('inc/footer-plugins'); ?>
<?php wp_footer(); ?>
</body>
</html>