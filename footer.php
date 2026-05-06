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
			<ul class="menu">
				<li class="page_item page-item-21 <?php if (is_page('portfolio')) { echo 'current_page_item'; }; ?>">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/" aria-current="page">
						<svg id="portfolio" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 32 32">
							<polygon id="left" points="16 3.27 11.14 8.14 19 16 11.14 23.86 16 28.73 28.73 16 16 3.27"/>
							<rect id="right" x="4.42" y="13.22" width="5.55" height="5.55" transform="translate(13.42 -.4) rotate(45)"/>
						</svg>
						Portfolio
					</a>
				</li>
				<li class="page_item page-item-1110 <?php if (is_page('about-me')) { echo 'current_page_item'; }; ?>">
					<a href="<?php echo esc_url( home_url( '/about-me/' ) ); ?>">
						<svg id="about" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 32 32">
							<circle id="top" cx="16" cy="9.5" r="6.5"/>
							<polygon id="bottom" points="28.73 19 3.27 19 16 29 28.73 19"/>
						</svg>
						About
					</a>
				</li>
				<li class="page_item page-item-1108 <?php if (is_page('blog')) { echo 'current_page_item'; }; ?>">
					<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">
						<svg id="blog" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 32 32">
							<polygon id="left" points="26 10.3 26 22.5 6.65 22.5 9.55 25.5 29 25.5 29 13.41 26 10.3"/>
							<rect id="right" x="3" y="6.5" width="19" height="12"/>
						</svg>
						Blog
					</a>
				</li>
				<li class="page_item page-item-19 <?php if (is_page('contact')) { echo 'current_page_item'; }; ?>">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
						<svg id="contact" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 32 32">
							<polygon id="top" points="29 7 3 7 16 16 29 7"/>
							<polygon id="bottom" points="3 25 29 25 16 16 3 25"/>
						</svg>
						Contact
					</a>
				</li>
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