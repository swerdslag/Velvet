</div>
	<footer>
	<div class="footer-content">
		<div class="sitemap">
			<h3 class="footer-heading"><?php echo __('Sitemap', 'whitesquare'); ?></h3>
			<div class="column first">
				<a href="/test/home/"><?php echo __('Home', 'whitesquare'); ?></a>
				<a href="/test/about/"><?php echo __('About', 'whitesquare'); ?></a>
				<a href="/test/services/"><?php echo __('Services', 'whitesquare'); ?></a>
			</div>
			<div class="column">
				<a href="/test/partners/"><?php echo __('Partners', 'whitesquare'); ?></a>
				<a href="/test/customers/"><?php echo __('Support', 'whitesquare'); ?></a>
				<a href="/test/contact/"><?php echo __('Contact', 'whitesquare'); ?></a>
			</div>
		</div>
		<div class="social">
			<h3 class="footer-heading"><?php echo __('Social networks', 'whitesquare'); ?></h3>
			<a href="http://twitter.com/" class="social-icon twitter-icon"></a>
			<a href="http://facebook.com/" class="social-icon facebook-icon"></a>
			<a href="http://plus.google.com/" class="social-icon google-plus-icon"></a>
			<a href="http://vimeo.com/" class="social-icon vimeo-icon"></a>
		</div>
		<div class="footer-logo">
			<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/velvet-logo-footer.png" alt="Velvet logo"></a>
			<p>
			<?php 
				if(get_theme_mod('hide_copyright') == '')
			    echo get_theme_mod('copyright_textbox', 'Текст копирайта еще не придумали');
			?>	
			</p>
		</div>
	</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>